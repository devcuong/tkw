<?php
/**
 * Contact form template.
 *
 * @package NCN_Contact_Form
 */
?>
<div class="ncn_contact_form hide">
	<h4 class="title"><?php echo esc_html( $title ); ?></h4>
	<p class="excerpt"><?php echo esc_html( $excerpt ); ?></p>

	<?php echo do_shortcode( $shortcode ); ?>
</div><!-- .ncn_contact_form -->
<div class="ncncf-btn"><img src="<?php echo NCN_CONTACT_FORM_URL . 'assets/images/mail.png'; ?>" alt="ncncf-btn"></div>