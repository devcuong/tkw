<?php

/**
* The file that defines shortcode
*
* @link       http://wensolutions.com
* @since      1.0.0
*
* @package    WEN_Logo_Slider
* @subpackage WEN_Logo_Slider/includes
*/

/**
* Shortcode class.
*
* This class contains shortcode stuff.
*
* @since      1.0.0
* @package    WEN_Logo_Slider
* @subpackage WEN_Logo_Slider/includes
* @author     WEN Solutions <info@wensolutions.com>
*/
class WEN_Logo_Slider_Shortcode {

  public function init() {

    add_shortcode( 'WLS', array( $this, 'WEN_Logo_Slider_shortcode_callback' ) );

  }

  private function check_if_valid_slider($args){

    $output = false;
    if ( isset($args['id']) && intval( $args['id'] ) > 0  ) {

      $slider = get_post(intval($args['id']));

      if ( ! empty( $slider ) && WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER == $slider->post_type ) {
        $output = true;
      }
    }
    return $output;
  }

  function WEN_Logo_Slider_shortcode_callback( $atts, $content = "" ){

    $atts = shortcode_atts( array(
      'id' => '',
      ), $atts, 'WLS' );

    $atts['id'] = absint($atts['id']);
    $is_valid_slider = $this->check_if_valid_slider($atts);
    if ( ! $is_valid_slider ) {
      return __( 'Slider not found', 'wen-logo-slider' );
    }
    ob_start();
    ?>

    <?php
    $slides = get_post_meta($atts['id'],'_wls_slides',true);
    ?>
    <?php if ( ! empty( $slides ) ): ?>

      <?php
      $slider_settings = get_post_meta($atts['id'],'wen_logo_slider_settings',true);
      $slider_settings['random_id'] = uniqid(esc_attr($atts['id']).'-');
      ?>
      <div class="wls-wrap">
      <?php if(isset($slider_settings['show_title']) && $slider_settings['show_title'] === '1'): ?>      
        <h2 class="wen-logo-slider-title"><?php echo get_post(esc_attr($atts['id']))->post_title; ?></h2>
      <?php endif; ?>
      <?php do_action( 'wen_logo_slider_before_slides', $atts['id'] ); ?>
      <div id="<?php echo $slider_settings['random_id']; ?>" class="<?php echo apply_filters( 'wen_logo_slider_custom_class', '', $atts['id'] ); ?>">
        

        <?php foreach ($slides as $key => $slide): 
          if (empty($slide['slide_image_id'])):
           continue; endif; 
          $attachment = get_post($slide['slide_image_id']);
          if ( empty( $attachment ) ) {
            continue;
          }
          
          $image_size = (isset($slider_settings['image_size']))?$slider_settings['image_size']:'thumbnail';
          $image_info = wp_get_attachment_image_src( $attachment->ID, $image_size );
          $image_url  = array_shift($image_info);
          $link_open  = '';
          $link_close = '';
          if ( ! empty( $slide['url'] ) ) {
            $link_open = '<a href="'.esc_url( $slide['url'] ).'"';
            if ( 'yes' == $slide['slide_new_window'] ) {
              $link_open .= ' target="_blank" ';
            }
            if ( ! empty( $slide['title'] ) ) {
              $link_open .= ' title="' . esc_attr( $slide['title'] ) . '" ';
            }
            $link_open .='>';
            $link_close = '</a>';
          }

          //list($width, $height) = getimagesize($image_url);
          ?>
          
          <div class="panel" > 
            <?php echo $link_open; ?>
            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $slide['title'] ); ?>" title="<?php echo esc_attr( $slide['title'] ); ?>" />
            <?php echo $link_close; ?>
            <?php if(isset($slide['title']) && $slide['title'] != ""): ?>
            <span>
              <h4><?php echo $slide['title']; ?></h4>              
            </span>
            <?php endif; ?>
          </div>

          <?php $image_url_list[] = esc_url( $image_url ); ?>
         <?php endforeach; ?>
       </div> <!-- Slides end -->
       
       <?php do_action( 'wen_logo_slider_after_slides', $atts['id'] ); ?>

       </div>
       <?php echo $this->get_slider_script( $atts, $slider_settings, $image_url_list );
      endif;
      $output = ob_get_contents();
      ob_end_clean();
      return $output;
  }

  function get_slider_script( $args, $settings,$image_url_list ){
    ob_start();
    ?>
    <style type="text/css">
    <?php if(isset($settings['enable_navigation_arrow']) && $settings['enable_navigation_arrow'] === '1'): ?>
        .wls-wrap{padding: 0 15px} 
    <?php endif; ?>      

    </style>   
    <script type="text/javascript">
      jQuery( document ).ready(function($) {

        jQuery.fn.randomize = function (selector) {
          var $elems = selector ? $(this).find(selector) : $(this).children(),
              $parents = $elems.parent();

          $parents.each(function () {
              $(this).children(selector).sort(function (childA, childB) {
                  // * Prevent last slide from being reordered
                  if($(childB).index() !== $(this).children(selector).length - 1) {
                      return Math.round(Math.random()) - 0.5;
                  }
              }.bind(this)).detach().appendTo(this);
          });

          return this;
        };

        $("#<?php echo $settings['random_id']; ?>")
        <?php if(isset($settings['enable_random_order']) && $settings['enable_random_order'] === '1'): ?>   
          .randomize()   
        <?php endif; ?>
        .slick({ 
        slidesToShow: <?php  echo esc_attr( $settings['images_per_slide'] ); ?>,
        slidesToScroll: 1,        
        autoplaySpeed: <?php echo esc_attr($settings['slider_delay'] ) * 1000 ; ?>,
        speed: <?php echo esc_attr($settings['transition_time']) * 1000 ; ?>,        
        arrows: <?php echo (isset($settings['enable_navigation_arrow']) && $settings['enable_navigation_arrow'] === '1')? 'true':'false'; ?>,
        asNavFor: null,         
        autoplay: true,
        
        useCSS: true,        
        responsive: [
        {
          breakpoint: 1199,
          settings: {
            arrows: true,
            slidesToShow: 4
          }
        },
        {
          breakpoint: 979,
          settings: {
            arrows: true,
            slidesToShow: 3
          }
        },{
          breakpoint: 768,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },{
          breakpoint: 479,
          settings: {
            arrows: true,
            slidesToShow: 1
          }
        }
        ]

        });
       
      });
    </script>

  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
  }

}
