<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://wensolutions.com
 * @since      1.0.0
 *
 * @package    WEN_Logo_Slider
 * @subpackage WEN_Logo_Slider/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @package    WEN_Logo_Slider
 * @subpackage WEN_Logo_Slider/admin
 * @author     WEN Solutions <info@wensolutions.com>
 */
class WEN_Logo_Slider_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $plugin_name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}


	 /**
	   * Get pagination options
	   *
	   * @since    1.0.0
	   */
	  public function get_pagination_options() {

	    $options = array(
	      'simple'   => __( 'simple', 'wen-logo-slider' ),
	      'numeric' => __( 'numeric', 'wen-logo-slider' ),
	      'thumb'  => __( 'thumb', 'wen-logo-slider' ),
	    );
	    return $options;

	}


	 /**
	   * Get scroll options
	   *
	   * @since    1.0.0
	   */
	  public function get_scroll_options() {

	    $options = array(
	      'true'   => __( 'True', 'wen-logo-slider' ),
	      'false' => __( 'False', 'wen-logo-slider' ),
	    );
	    return $options;

	}


	 /**
	   * Get caption positions
	   *
	   * @since    1.0.0
	   */
	  public function caption_position_options() {

	    $options = array(
	      'hide'   => __( 'No caption', 'wen-logo-slider' ),	
	      'top'   => __( 'Top', 'wen-logo-slider' ),
	      'bottom' => __( 'Bottom', 'wen-logo-slider' ),
	    );
	    return $options;

	}
	  public function caption_effect() {

	    $options = array(
	      'slideToggle'   => __( 'Slide Toggle', 'wen-logo-slider' ),	
	      'fade'   => __( 'Fade', 'wen-logo-slider' ),
	      
	    );
	    return $options;

	}
	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		$screen = get_current_screen();		
		if (  in_array( $screen->id, array( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER, 'logo_slider_page_class-wen-logo-slider-admin' ) ) ) {
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wen-logo-slider-admin.css', array(), $this->version, 'all' );
		}

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		$screen = get_current_screen();
		// print_r($screen);
		if (  in_array( $screen->id, array( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER, 'logo_slider_page_class-wen-logo-slider-admin' ) ) ) {

			wp_enqueue_script('jquery-ui-sortable');

			wp_enqueue_media();

			wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wen-logo-slider-admin.js', array( 'jquery' ), $this->version, false );

			wp_enqueue_script( $this->plugin_name.'-custom', plugin_dir_url( __FILE__ ) . 'js/wen-logo-slider-public.js', array( 'jquery' ), $this->version, false );
			
			// choosen image
			wp_enqueue_script( $this->plugin_name.'-chosen-jquery-min', plugin_dir_url( __FILE__ ) . 'js/wen-logo-slider-chosen.jquery.min.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script( $this->plugin_name.'-chosenImag-.jquery', plugin_dir_url( __FILE__ ) . 'js/wen-logo-slider-chosenImage.jquery.js', array( 'jquery' ), $this->version, false );

			$extra_array = array(
				'lang' => array(
					'are_you_sure'       => __( 'Are you sure?', 'wen-logo-slider' ),
					'yes'                => __( 'Yes', 'wen-logo-slider' ),
					'no'                 => __( 'No', 'wen-logo-slider' ),
					'remove'             => __( 'Remove', 'wen-logo-slider' ),
					'image'              => __( 'Image', 'wen-logo-slider' ),
					'upload'             => __( 'Upload', 'wen-logo-slider' ),
					'insert'             => __( 'Insert', 'wen-logo-slider' ),
					'select'             => __( 'Select', 'wen-logo-slider' ),
					'select_image'       => __( 'Select Image', 'wen-logo-slider' ),
					'title'              => __( 'Title', 'wen-logo-slider' ),
					'enter_title'        => __( 'Enter Title', 'wen-logo-slider' ),
					'url'                => __( 'URL', 'wen-logo-slider' ),
					'enter_url'          => __( 'Enter URL', 'wen-logo-slider' ),
					'open_in_new_window' => __( 'Open in new window', 'wen-logo-slider' ),
				),
			);
			wp_localize_script( $this->plugin_name, 'WLS_OBJ', $extra_array );
			wp_enqueue_script( $this->plugin_name );
		}
	}

	function add_slider_meta_boxes(){
		$screens = array( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER );
		foreach ( $screens as $screen ) {
			add_meta_box(
				'wen_logo_slider_upgrade_block_id',
				__( 'Upgrade Available', 'wen-logo-slider' ),
				array( $this, 'upgrade_box_callback' ),
				$screen,
				'side'
			);
			add_meta_box(
				'wen_logo_slider_doc_block_id',
				__( 'Documentation', 'wen-logo-slider' ),
				array( $this, 'documentation_box_callback' ),
				$screen,
				'side'
			);
			add_meta_box(
				'wen_logo_slider_help_block_id',
				__( 'Need Help?', 'wen-logo-slider' ),
				array( $this, 'help_box_callback' ),
				$screen,
				'side'
			);
			add_meta_box(
				'wen_logo_slider_review_block_id',
				__( 'Reviews', 'wen-logo-slider' ),
				array( $this, 'review_box_callback' ),
				$screen,
				'side'
			);
			add_meta_box(
				'wen_logo_slider_tab_id',
				__( 'Slides / Settings', 'wen-logo-slider' ),
				array($this,'tab_meta_box_callback'),
				$screen,
				'normal',
				'high'
			);
		}
	}
	public function upgrade_box_callback(){
		?>

       <div class="thumbnail">
            <img src="<?php echo WEN_LOGO_SLIDER_URL ?>/admin/images/update.png">
             <p class="text-justify">For More Features and settings Please upgrade to pro. Need more info, click link below</p>
             <p class="text-center"><a href="http://themepalace.com/downloads/wen-logo-slider-pro/" target="_blank" class="button button-primary">Upgrade Now</a></p>
       </div>
             

		<?php
	}
	public function documentation_box_callback(){
		?>

       <div class="thumbnail">
            <img src="<?php echo WEN_LOGO_SLIDER_URL ?>/admin/images/docico.png" style="max-width:100%">
             <p class="text-justify">Click Below for our full Documentation about logo slider. </p>
             <p class="text-center"><a href="http://wensolutions.com/plugins/wen-logo-slider/documentation" target="_blank" class="button button-primary">Get Documentation Here</a></p>
       </div>             

		<?php
	}
	public function help_box_callback(){
		?>

       <div class="thumbnail">
            <img src="<?php echo WEN_LOGO_SLIDER_URL ?>/admin/images/help.png">
             <p class="text-justify">If you need further assistance, Please feel free to visit our support team</p>
             <p class="text-center"><a href="https://wordpress.org/support/plugin/wen-logo-slider" target="_blank" class="button button-primary">Get Support Here</a></p>
       </div>             

		<?php
	}
	public function review_box_callback(){
		?>		
		<div class="thumbnail">
			<p class="text-center">  
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>					
			</p>
			<h5>"After testing a lot of plugin. I was hopeless o get a free logo slider but luckily I found this one and it saved the day :D "</h5>
			<span class="by"><strong> <a href="https://wordpress.org/support/view/plugin-reviews/wen-logo-slider" target="_blank">Suleman Muqeed</a></strong></span>

		</div>
		<div class="thumbnail">
			<p class="text-center"> 
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>			
			</p>
			<h5>"The best solution: Light and easy to use! "</h5>
			<span class="by"><strong><a href="https://wordpress.org/support/view/plugin-reviews/wen-logo-slider" target="_blank">ntorga</a></strong></span>
		</div>
		<div class="thumbnail">
			
			<p class="text-center"> 
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>
				<i class="dashicons dashicons-star-filled" aria-hidden="true"></i>			 
			</p>
			<h5>"The best slider i found after testing a lot of them!! Very clean and very easy to install and setup!"</h5>
			<span class="by"><strong><a href="https://wordpress.org/support/view/plugin-reviews/wen-logo-slider" target="_blank">sandrobatista</a> </strong></span>
		</div>
		<div class="thumbnail last">
			<h5>"Please fill free to leave us a review, if you found this plugin helpful."</h5>
			<p  class="text-center"><a href="https://wordpress.org/support/view/plugin-reviews/wen-logo-slider" target="_blank" class="button button-primary">Leave a Review</a></p>
		</div>     
		<?php
	}

	// Tab for slider listing and settings
	public function tab_meta_box_callback(){
		?>
	    <div id="tabs-container" class="clearfix">
		    <ul class="tabs-menu clearfix">
		        <li class="current"><a href="#tab-1">Slides</a></li>
		        <li><a href="#tab-2">Settings</a></li>
		        <li><a href="#tab-3">Uses</a></li>	        
		    </ul>
		    <div class="tab clearfix">
		        <div id="tab-1" class="tab-content ws_slides">
	            	<?php include WEN_LOGO_SLIDER_DIR.'/admin/partials/wen-logo-slider-slides.php'; ?>
		        </div>
		        <div id="tab-2" class="tab-content ws_settings">
	            	<?php include WEN_LOGO_SLIDER_DIR.'/admin/partials/wen-logo-slider-settings.php'; ?>	            	
		        </div>
		        <div id="tab-3" class="tab-content ws_uses">
	            	<?php $this->usage_box_callback($post) ?>	            	
		        </div>		        
		    </div>
		</div>
	<?php
	}

	private function get_image_sizes(){
		global $_wp_additional_image_sizes;
		$sizes = array();
    	$get_intermediate_image_sizes = get_intermediate_image_sizes();

	    // Create the full array with sizes and crop info
	    foreach( $get_intermediate_image_sizes as $_size ) {

	      if ( in_array( $_size, array( 'thumbnail', 'medium', 'large' ) ) ) {

	        $sizes[ $_size ]['width'] = get_option( $_size . '_size_w' );
	        $sizes[ $_size ]['height'] = get_option( $_size . '_size_h' );
	        $sizes[ $_size ]['crop'] = (bool) get_option( $_size . '_crop' );

	      } elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

	        $sizes[ $_size ] = array(
	                'width' => $_wp_additional_image_sizes[ $_size ]['width'],
	                'height' => $_wp_additional_image_sizes[ $_size ]['height'],
	                'crop' =>  $_wp_additional_image_sizes[ $_size ]['crop']
	        );
	      }
	    }
		return $sizes;
	}

	function usage_box_callback( $post ){
		?>
		<h4><?php _e( 'Shortcode', 'wen-logo-slider' ); ?></h4>
		<p><?php _e( 'Copy and paste this shortcode directly into any WordPress post or page.', 'wen-logo-slider' ); ?></p>
		<input type="text" class="large-text code" readonly="readonly" value='<?php echo '[WLS id="'.$post->ID.'"]'; ?>' />

		<h4><?php _e( 'Template Include', 'wen-logo-slider' ); ?></h4>
		<p><?php _e( 'Copy and paste this code into a template file to include the slider within your theme.', 'wen-logo-slider' ); ?></p>
		<input type="text" class="large-text code" readonly="readonly" value="&lt;?php echo do_shortcode(&quot;[WLS id='<?php echo $post->ID; ?>']&quot;); ?&gt;" />
		<?php
	}

	function save_settings_meta_box( $post_id ){		
		if ( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER != get_post_type( $post_id ) ) {
			return $post_id;
		}

		// Bail if we're doing an auto save
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

		// if our nonce isn't there, or we can't verify it, bail
		if ( !isset( $_POST['ws_logo_slider_settings_nonce_field'] ) || !wp_verify_nonce( $_POST['ws_logo_slider_settings_nonce_field'], 'ws_logo_slider_settings_nonce_action' ) )
		    return $post_id;

		// if our current user can't edit this post, bail
		if( !current_user_can( 'edit_post' , $post_id ) )
			return $post_id;

		$refined_settings = array();
		if ( ! empty( $_POST['wen_logo_slider_settings'] ) ) {
			foreach ( $_POST['wen_logo_slider_settings'] as $key => $value) {
				$refined_settings[$key] = esc_attr($value);
				switch ( $key ) {
					case 'slider_delay':
						if( intval($value) < 1 ) {
							$refined_settings[$key] = 4;
						}
						break;
					case 'transition_time':
						if( intval($value) < 1 ) {
							$refined_settings[$key] = 1;
						}
						break;
					case 'images_per_slide':
						if( intval($value) < 1 || intval($value) > 9  ) {
							$refined_settings[$key] = 5;
						}
						break;

					default:
						$refined_settings[$key] = $value;
						break;
				}
			}
		}

		if ( ! empty( $refined_settings ) ) {			
			update_post_meta( $post_id, 'wen_logo_slider_settings', $refined_settings );
		}
	}

	function save_slides_meta_box( $post_id ){

		if ( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER != get_post_type( $post_id ) ) {
			return $post_id;
		}

		// Bail if we're doing an auto save
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

		// if our nonce isn't there, or we can't verify it, bail
		if ( !isset( $_POST['ws_logo_slider_slides_nonce_field'] ) || !wp_verify_nonce( $_POST['ws_logo_slider_slides_nonce_field'], 'ws_logo_slider_slides_nonce_action' ) )
		    return $post_id;

		// if our current user can't edit this post, bail
		if( !current_user_can( 'edit_post' , $post_id ) )
			return $post_id;

		$slide_title_array = array();
		if ( isset( $_POST['slide_title'] ) ) {

			$slide_title_array = $_POST['slide_title'];

		}

		$slides_array = array();		
		$cnt = 0;
		
		foreach ( $slide_title_array as $key => $title ) {

			$slides_array[$cnt]['title']            = sanitize_text_field( $title );
			$slides_array[$cnt]['url']              = esc_url( $_POST['slide_url'][$key] );
			$slides_array[$cnt]['slide_new_window'] = esc_attr( $_POST['slide_new_window'][$key] );
			$slides_array[$cnt]['slide_image_id']   = sanitize_text_field( $_POST['slide_image_id'][$key] );

			$cnt++;

		}
		update_post_meta( $post_id, '_wls_slides', $slides_array );
	}

	function usage_column_head( $columns ){
		$new_columns['cb']     = '<input type="checkbox" />';
		$new_columns['title']  = $columns['title'];
		$new_columns['id']     = _x( 'ID', 'column name', 'wen-logo-slider' );
		$new_columns['slides'] = _x( 'Slides', 'column name', 'wen-logo-slider' );
		$new_columns['usage']  = __( 'Usage', 'wen-logo-slider' );
		$new_columns['date']   = $columns['date'];
		return $new_columns;
	}

	function usage_column_content( $column_name, $post_id ){
		switch ( $column_name ) {
			case 'id':
				echo $post_id;
				break;

			case 'usage':
				echo '<code>[WLS id="' . $post_id . '"]</code>';
				break;

			case 'slides':
				$slides = get_post_meta( $post_id, '_wls_slides', true );
				echo $count = ( empty( $slides ) ) ? 0 : count( $slides ) ;
				break;

			default:
				break;
		}

	}

	public function hide_publishing_actions() {
		global $post;
		if ( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER != $post->post_type ) {
			return;
		}
		?>
		<style type="text/css">
		#misc-publishing-actions,#minor-publishing-actions{
			display:none;
		}
		</style>
		<?php
		return;
	}

	function customize_row_actions( $actions, $post ){

		if ( WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER == $post->post_type ) {

			unset( $actions['inline hide-if-no-js'] );

		}

		return $actions;

	}

	function tinymce_button(){

		if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
		     add_filter( 'mce_buttons', array($this,'register_tinymce_button' ) );
		     add_filter( 'mce_external_plugins', array($this,'add_tinymce_button' ) );
		}

	}

	function register_tinymce_button( $buttons ){

		array_push( $buttons, 'wen_logo_slider' );
		return $buttons;

	}

	function add_tinymce_button( $plugin_array ){

		$plugin_array['wen_logo_slider'] = WEN_LOGO_SLIDER_URL . '/admin/js/wen-logo-slider-tinymce-plugin.js';
		return $plugin_array;

	}

	function tinymce_external_language( $locales ){

		$locales ['wen-logo-slider'] = WEN_LOGO_SLIDER_DIR. '/admin/partials/wen-logo-slider-tinymce-plugin-langs.php';
    return $locales;

	}

	function tinymce_popup(){
		?>
		<div id="WLS-popup-form" style="display:none">
		  <div>
			<?php $args = array(
				'post_type'      => WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER,
				'posts_per_page' => -1,
				);

			$all_slides = get_posts($args);
			 ?>
			 <?php if ( ! empty($all_slides ) ): ?>
			    <p><?php _e( 'Select Slider', 'wen-logo-slider' ); ?>
			    <select name="wls-slide" id="wls-slide">
			    <?php foreach ($all_slides as $key => $slide): ?>
				    	<option value="<?php echo esc_attr( $slide->ID); ?>"><?php echo esc_attr( $slide->post_title); ?></option>
			    <?php endforeach ?>
			    </select>
			    </p>
			    <p class="submit">
			      <input type="button" id="WLS-submit" class="button-primary" value="<?php esc_attr( _e( 'Insert', 'wen-logo-slider' ) ); ?>" name="submit" />
			    </p>
			    <script type="text/javascript">
			    jQuery(document).ready(function($){
			      $('#WLS-submit').click(function(e){

			        e.preventDefault();
			        var shortcode = '[WLS';
			        var wls_slide = $('#wls-slide').val();
			        if ( '' != wls_slide) {
			          shortcode += ' id="'+wls_slide+'"';
			        }
			        shortcode += ']';

			        // inserts the shortcode into the active editor
			        tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);

			        // closes Thickbox
			        tb_remove();

			      });
			    });

			       </script>

			 	<?php else: ?>
			 		<p><strong><?php _e( 'No slider found', 'wen-logo-slider' ); ?></strong></p>
			 <?php endif ?>

		  </div>
		</div><!-- #WLS-popup-form -->
		<?php
	}

	function html_templates(){
		?>
		<script type="text/template" id='template-wls-slider-item'>
			<div class="slide-item-wrap clearfix">
				<div class="slide-item-left">
					<input type="button" value="" class="button btn-remove-slide-item"/>
					<div class="wls-form-row">
						<input type="hidden" name="slide_image_id[]" value="" class="wls-slide-image-id" />
						<input type="button" class="wls-select-single-img button button-primary" value="<?php _e( 'Upload', 'wen-logo-slider' ); ?>" data-uploader_button_text="<?php _e( 'Select', 'wen-logo-slider' );?>" data-uploader_title="<?php _e( 'Select Image', 'wen-logo-slider' );?>" />
						<div class="image-preview-wrap" style="display:none;" >
							<img class="img-preview" alt="<?php _e( 'Preview', 'wen-logo-slider' ); ?>" src="" height="150" width="150" />
							<a href="#" class="btn-wls-remove-image-upload">
								<span class="dashicons dashicons-dismiss"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-item-right">

					<div class="wls-form-row">
						<i class="dashicons dashicons-editor-textcolor"></i>
						<input type="text" name="slide_title[]" value="" placeholder="<?php _e( 'Enter Title', 'wen-logo-slider' ); ?>" class="txt-slide-title regular-text code" />
						<span class="description"><?php _e( 'Enter Title', 'wen-logo-slider' ); ?></span>
					</div>

					<div class="wls-form-row">
						<i class="dashicons dashicons-admin-site"></i>

						<input type="text" name="slide_url[]" value="" placeholder="<?php _e( 'http://example.com', 'wen-logo-slider' ); ?>" class="txt-slide-url regular-text code" />
						<span class="description"><?php _e( 'Enter URL', 'wen-logo-slider' ); ?></span>
					</div>

					<div class="wls-form-row">
						<i class="dashicons dashicons-share-alt2"></i>
						<select name="slide_new_window[]" class="wls-choosen">
							<option value="yes"><?php _e( 'Yes', 'wen-logo-slider' ); ?></option>
							<option value="no"><?php _e( 'No', 'wen-logo-slider' ); ?></option>
						</select>
						<span class="description"><?php _e( 'Open in new window', 'wen-logo-slider' ); ?></span>

					</div>
				</div>
			</div>
		</script>

		<?php
	}

	function updated_messages( $messages ){

		$post             = get_post();
		$post_type        = get_post_type( $post );
		$post_type_object = get_post_type_object( $post_type );

		$messages[WEN_LOGO_SLIDER_POST_TYPE_LOGO_SLIDER] = array(
			0  => '', // Unused. Messages start at index 1.
			1  => __( 'Slider updated.', 'wen-logo-slider' ),
			2  => __( 'Custom field updated.', 'wen-logo-slider' ),
			3  => __( 'Custom field deleted.', 'wen-logo-slider' ),
			4  => __( 'Slider updated.', 'wen-logo-slider' ),
			/* translators: %s: date and time of the revision */
			5  => isset( $_GET['revision'] ) ? sprintf( __( 'Slider restored to revision from %s', 'wen-logo-slider' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6  => __( 'Slider created.', 'wen-logo-slider' ),
			7  => __( 'Slider saved.', 'wen-logo-slider' ),
			8  => __( 'Slider submitted.', 'wen-logo-slider' ),
			9  => sprintf(
				__( 'Slider scheduled for: <strong>%1$s</strong>.', 'wen-logo-slider' ),
				// translators: Publish box date format, see http://php.net/date
				date_i18n( __( 'M j, Y @ G:i', 'wen-logo-slider' ), strtotime( $post->post_date ) )
			),
			10 => __( 'Slider draft updated.', 'wen-logo-slider' )
		);

		return $messages;
	}

	function settings_template($settings_args){ ob_start();  ?>	

	<?php //print_r($settings_args); ?>
	<div class="setting-options-wrap">
		<h3 class="option-title"><a href="#" class="showing">General Settings <i class="dashicons dashicons-arrow-up"></i></a></h3>
		<div class="setting-options general-options">		
			
			<p>
				<label class="title"><strong><?php _e( 'Images per Slide', 'wen-logo-slider' ); ?></strong></label>			
				<input type="number" id="onlynumbers" min="1" max="9" name="wen_logo_slider_settings[images_per_slide]" value="<?php echo esc_attr( $settings_args['images_per_slide'] ); ?>" />
				<span class="description">(<?php echo sprintf( __( 'number between %d-%d', 'wen-logo-slider' ), 1, 9) ;	?>)</span>
			</p>
			
			
			<p>
				<label class="title"><strong><?php _e( 'Random Order', 'wen-logo-slider' ); ?></strong></label>
				<label>
					<input type="hidden" id="wen_logo_slider_settings[enable_random_order]" name="wen_logo_slider_settings[enable_random_order]" value="0" />
					<input type="checkbox" id="wen_logo_slider_settings[enable_random_order]" name="wen_logo_slider_settings[enable_random_order]" value="1" <?php if(isset( $settings_args['enable_random_order'])){checked( $settings_args['enable_random_order'], 1, true);} else{ echo "checked";} ?>  />
					<span class="small"><?php _e( 'Enable', 'wen-logo-slider' ); ?></span>
				</label>
			</p>
		</div>
	</div>
	<div class="setting-options-wrap">
		<h3 class="option-title"><a href="#">Advance Settings <i class="dashicons dashicons-arrow-down"></i></a></h3>
		<div class="setting-options advance-options">
			<p>
				<label class="title"><strong><?php _e( 'Slider Delay', 'wen-logo-slider' ); ?></strong></label>
				<input type="number" id="numbersonly" min="1" max="20" name="wen_logo_slider_settings[slider_delay]" value="<?php echo esc_attr( $settings_args['slider_delay'] ); ?>" />
				<span class="description">(<?php _e( 'in seconds', 'wen-logo-slider' ); ?>)</span>
			</p>
			<p>
				<label class="title"><strong><?php _e( 'Transition Time', 'wen-logo-slider' ); ?></strong></label>			
				<input type="number" id="numbers" min="1" max="9" name="wen_logo_slider_settings[transition_time]" value="<?php echo esc_attr( $settings_args['transition_time'] ); ?>" />
				<span class="description">(<?php _e( 'in seconds', 'wen-logo-slider' ); ?>)</span>
			</p>
			<p>
				<label class="title"><strong><?php _e( 'Image Size', 'wen-logo-slider' ); ?></strong></label>			
				<select name="wen_logo_slider_settings[image_size]" id="wls_image_size" class="wls-choosen" >
					<?php $image_sizes = $this->get_image_sizes(); ?>
					<?php foreach ($image_sizes as $key => $size): ?>
						<option value="<?php echo esc_attr( $key ); ?>" <?php if(isset( $settings_args['image_size']))selected( $settings_args['image_size'], $key ); ?>><?php echo esc_attr( $key ); ?><?php echo ' ('.$size['width'] . 'x'.$size['height'] . ')'; ?></option>
					<?php endforeach ?>
				</select></p>

			<p>
				<label  class="title"><strong><?php _e( 'Navigation Arrow', 'wen-logo-slider' ); ?></strong></label>
				
				<label>
					<input type="hidden" id="wen_logo_slider_settings[enable_navigation_arrow]" name="wen_logo_slider_settings[enable_navigation_arrow]" value="0" />
					<input type="checkbox" id="wls_enable_navigation_arrow" name="wen_logo_slider_settings[enable_navigation_arrow]" value="1"  <?php if(isset( $settings_args['enable_navigation_arrow']))checked( $settings_args['enable_navigation_arrow'], 1, true); ?> />		
					<?php _e( 'Enable', 'wen-logo-slider' ); ?>
					<span class="description">(<?php _e( 'Previous / Next', 'wen-logo-slider' ); ?>)</span>
				</label>
			</p>

		</div>
	</div>

			

	<?php echo ob_get_clean(); 
	}



	function settings_default_args(){
		$defaults = array(
		
		'slider_delay'				=> 4,
		'transition_time'			=> 1,			
		'images_per_slide'			=> 5,
		
		'image_size'				=> 'thumbnail',		
		'scroll'					=> 'True', // Infinite Scroll		
		'enable_navigation_arrow'	=> 0,
		'navigation_type'			=> 'arrows',
		'enable_random_order'		=> 0
		);
		return $defaults;
	}

}
