<?php
/**
  @ Khai bao hang gia tri
  @ THEME_URL = lay duong dan thu muc theme
  @ CORE = lay duong dan thu muc /core
 **/
define('THEME_URL', get_stylesheet_directory_uri());
define('DIR_STYLE', "/style");
define('DIR_JS', "/js");
define('DIR_FILE', "/file");
define('DIR_IMAGE', "/Images");
define('DIR_RESOURCE', "/resource");
define('THEME_DIR', get_stylesheet_directory());
define('CORE', THEME_DIR . "/core");

/* ------------- TEMPLATE CSS ------------- */
function website_style()
{
    wp_register_style('bootstrap-style', THEME_URL . DIR_STYLE . "/Themes/bootstrap.min.css", 'all');
    wp_enqueue_style('bootstrap-style');
    
    wp_register_style('font-awesome-style', THEME_URL . DIR_STYLE . "/Themes/font-awesome.min.css", 'all');
    wp_enqueue_style('font-awesome-style');
    
    wp_register_style('animate-style', THEME_URL . DIR_STYLE . "/Themes/animate.min.css", 'all');
    wp_enqueue_style('animate-style');
    
    wp_register_style('main-style', THEME_URL . DIR_STYLE . "/Themes/main.min.css", 'all');
    wp_enqueue_style('main-style');
    
    wp_register_style('w3-style', THEME_URL . DIR_STYLE . "/Themes/w3.css", 'all');
    wp_enqueue_style('w3-style');
    
    wp_register_style('custome-style', THEME_URL . "/style.css", 'all');
    wp_enqueue_style('custome-style');
}

add_action('wp_enqueue_scripts', 'website_style');

/* ------------- TEMPLATE JS ------------- */
function website_script()
{
    wp_register_script('carousel-script', THEME_URL . DIR_JS . "/owl.carousel.min.js", array(
        'jquery'
    ));
    wp_enqueue_script('carousel-script');
    
    wp_register_script('angular-script', THEME_URL . DIR_JS . "/angular.min.js", array(
        'jquery'
    ));
    wp_enqueue_script('angular-script');
    
    wp_register_script('main-script', THEME_URL . DIR_STYLE . "/Themes/main.min.js", array(
        'jquery'
    ));
    wp_enqueue_script('main-script');
    
    wp_register_script('wow-script', THEME_URL . DIR_STYLE . "/Themes/wow.min.js", array());
    wp_enqueue_script('wow-script');
    
    wp_register_script('bootstrap-script', THEME_URL . DIR_JS . "/bootstrap.min.js", array());
    wp_enqueue_script('bootstrap-script');
    
    wp_register_script('docs-script', THEME_URL . DIR_JS . "/docs.min.js", array(
        'jquery'
    ));
    wp_enqueue_script('docs-script');
    
    wp_register_script('viewport-script', THEME_URL . DIR_JS . "/ie10-viewport-bug-workaround.js", array(
        'jquery'
    ));
    wp_enqueue_script('viewport-script');
    
    wp_register_script('myjs-script', THEME_URL . DIR_JS . "/myjs.js", array(
        'jquery'
    ));
    wp_enqueue_script('myjs-script');
    
    wp_register_script('jssor-script', THEME_URL . DIR_JS . "/jssor.slider.mini.js", array(
        'jquery'
    ));
    wp_enqueue_script('jssor-script');
}
add_action('wp_enqueue_scripts', 'website_script');
/**
 * @ Khai bao chuc nang cua theme
 */
if (! function_exists('tkw_theme_setup')) {

    function tkw_theme_setup()
    {
        // Ho tro post-thumbnails
        add_theme_support('post-thumbnails');
        
        // Ho tro post type mau_website
        add_post_type_support('mau_website', 'thumbnail');
        
        /* Them menu */
        register_nav_menu('primary-menu', __('Primary Menu', 'doancuong'));
    }
}

add_action('init', 'tkw_theme_setup');

/**
 * Thiet lap menu
 * */
if(!function_exists('tkw_menu')){
    function tkw_menu($menu){
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => 'collapse navbar-collapse navbar-right',
            'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>'
        );
        wp_nav_menu( $menu );
    }
}



function tkw_widgets_init() {
    // First footer widget area.
    register_sidebar( array(
    'name' => __( 'First Footer Widget Area', 'doancuong' ),
    'id' => 'first-footer-widget-area',
    'description' => __( 'The first footer widget area', 'doancuong' ),
    'before_widget' => '<div id="%1$s" class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area.
    register_sidebar( array(
    'name' => __( 'Second Footer Widget Area', 'doancuong' ),
    'id' => 'second-footer-widget-area',
    'description' => __( 'The second footer widget area', 'doancuong' ),
    'before_widget' => '<div id="%1$s" class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
    'name' => __( 'Third Footer Widget Area', 'doancuong' ),
    'id' => 'third-footer-widget-area',
    'description' => __( 'The third footer widget area', 'doancuong' ),
    'before_widget' => '<div id="%1$s" class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
    'name' => __( 'Fourth Footer Widget Area', 'doancuong' ),
    'id' => 'fourth-footer-widget-area',
    'description' => __( 'The fourth footer widget area', 'doancuong' ),
    'before_widget' => '<div id="%1$s" class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'tkw_widgets_init' );

/* add_filter( 'tiny_mce_before_init', 'myformatTinyMCE' );
function myformatTinyMCE( $in ) {

$in['wordpress_adv_hidden'] = FALSE;

return $in;
}
 */