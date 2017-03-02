<?php
/**
 * Setting page.
 *
 * @package NCN_Contact_Form_Widget
 */

function ncncf_admin_menu() {
	add_options_page( 'NCN: Contact Form Setting Page', 'NCN Contact Form', 'manage_options', 'ncn-contact-form', 'ncncf_options_page' );
}
add_action( 'admin_menu', 'ncncf_admin_menu' );

function ncncf_admin_init() {
	register_setting( 'ncncf-settings-group', 'ncncf-title', 'sanitize_text_field' );
	add_settings_section( 'section-title', '', 'section_title_callback', 'ncncf-title' );
	add_settings_field( 'field-title', 'Title', 'field_title_callback', 'ncncf-title', 'section-title' );

	register_setting( 'ncncf-settings-group', 'ncncf-excerpt', 'sanitize_text_field' );
	add_settings_section( 'section-excerpt', '', 'section_excerpt_callback', 'ncncf-excerpt' );
	add_settings_field( 'field-excerpt', 'Excerpt', 'field_excerpt_callback', 'ncncf-excerpt', 'section-excerpt' );

	register_setting( 'ncncf-settings-group', 'ncncf-shortcode', 'sanitize_text_field' );
	add_settings_section( 'section-shortcode', '', 'section_shortcode_callback', 'ncncf-shortcode' );
	add_settings_field( 'field-shortcode', 'Shortcode CF7', 'field_shortcode_callback', 'ncncf-shortcode', 'section-shortcode' );
}
add_action( 'admin_init', 'ncncf_admin_init' );

function section_title_callback() {
	echo '';
}

function field_title_callback() {
	$title = esc_attr( get_option( 'ncncf-title' ) );
	if ( ! $title ) {
		$title = esc_html__( 'Contact Us', 'namncn' );
	}

	echo "<input type='text' name='ncncf-title' value='$title' />";
}

function section_excerpt_callback() {
	echo '';
}

function field_excerpt_callback() {
	$excerpt = esc_attr( get_option( 'ncncf-excerpt' ) );
	if ( ! $excerpt ) {
		$excerpt = esc_html__( 'Use the form below to contact us!', 'namncn' );
	}

	echo "<input type='text' name='ncncf-excerpt' value='$excerpt' />";
}

function section_shortcode_callback() {
	echo '';
}

function field_shortcode_callback() {
	$shortcode = esc_attr( get_option( 'ncncf-shortcode' ) );
	if ( ! $shortcode ) {
		$shortcode = '[contact-form-7 id="4" title="Contact form 1"]';
	}

	echo "<input type='text' name='ncncf-shortcode' value='$shortcode' />";
}

function ncncf_options_page() {
	?>
	<div class="wrap">
		<h2>NCN: Contact Form Setting Page</h2>
		<form action="options.php" method="POST">
			<?php settings_fields( 'ncncf-settings-group' ); ?>
			<?php do_settings_sections( 'ncncf-title' ); ?>
			<?php do_settings_sections( 'ncncf-excerpt' ); ?>
			<?php do_settings_sections( 'ncncf-shortcode' ); ?>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

