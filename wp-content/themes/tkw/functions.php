<?php
/**
  @ Khai bao hang gia tri
  @ THEME_URL = lay duong dan thu muc theme
  @ CORE = lay duong dan thu muc /core
 **/
 define( 'THEME_URL', get_stylesheet_directory_uri() );
 define( 'DIR_STYLE', "/style" );
 define( 'DIR_JS', "/js" );
 define( 'DIR_FILE', "/file" );
 define( 'DIR_IMAGE', "/image" );
 define( 'DIR_RESOURCE', "/resource" );
 define( 'THEME_DIR', get_stylesheet_directory() );
 define('CORE', THEME_DIR . "/core");
 
    /*------------- TEMPLATE CSS ------------- */
function website_style() {
	
	wp_register_style('bootstrap-style', THEME_URL. DIR_STYLE . "/Themes/bootstrap.min.css", 'all');
	wp_enqueue_style('bootstrap-style');
	
	wp_register_style('font-awesome-style', THEME_URL. DIR_STYLE . "/Themes/font-awesome.min.css", 'all');
	wp_enqueue_style('font-awesome-style');
	
	wp_register_style('animate-style', THEME_URL. DIR_STYLE . "/Themes/animate.min.css", 'all');
	wp_enqueue_style('animate-style');
	
	wp_register_style('main-style', THEME_URL. DIR_STYLE . "/Themes/main.min.css", 'all');
	wp_enqueue_style('main-style');
	
}
	
add_action('wp_enqueue_scripts', 'website_style');

	/*------------- TEMPLATE JS ------------- */
function website_script() {
    
    wp_register_script('carousel-script', THEME_URL . DIR_JS . "/owl.carousel.min.js", array('jquery'));
    wp_enqueue_script('carousel-script');
    
    wp_register_script('angular-script', THEME_URL . DIR_JS . "/angular.min.js", array('jquery'));
    wp_enqueue_script('angular-script');
	
	wp_register_script('main-script', THEME_URL . DIR_STYLE . "/Themes/main.min.js", array('jquery'));
	wp_enqueue_script('main-script');
	
	wp_register_script('wow-script', THEME_URL . DIR_STYLE . "/Themes/wow.min.js", array());
	wp_enqueue_script('wow-script');
	
	wp_register_script('bootstrap-script', THEME_URL . DIR_JS .  "/bootstrap.min.js", array());
	wp_enqueue_script('bootstrap-script');
	
	wp_register_script('docs-script', THEME_URL . DIR_JS . "/docs.min.js", array('jquery'));
	wp_enqueue_script('docs-script');
	
	wp_register_script('viewport-script', THEME_URL . DIR_JS . "/ie10-viewport-bug-workaround.js", array('jquery'));
	wp_enqueue_script('viewport-script');
	
	wp_register_script('myjs-script', THEME_URL . DIR_JS . "/myjs.js", array('jquery'));
	wp_enqueue_script('myjs-script');
	
	wp_register_script('jssor-script', THEME_URL . DIR_JS . "/jssor.slider.mini.js", array('jquery'));
	wp_enqueue_script('jssor-script');
	
}
add_action('wp_enqueue_scripts', 'website_script');
