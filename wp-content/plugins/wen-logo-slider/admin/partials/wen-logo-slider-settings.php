<?php
	global $post;
	$wls_settings = get_post_meta( $post->ID, 'wen_logo_slider_settings', true );	
	if(empty($wls_settings))
		$wls_settings = array();
	
	$defaults = $this->settings_default_args();		
	$settings_args = array_merge( $defaults, $wls_settings );
	?>
	<?php wp_nonce_field( 'ws_logo_slider_settings_nonce_action', 'ws_logo_slider_settings_nonce_field' ); ?>	
	<?php $this->settings_template($settings_args); ?>