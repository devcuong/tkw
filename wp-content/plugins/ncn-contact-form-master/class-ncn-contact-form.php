<?php
/**
 * NCN Contact Form class.
 *
 * @package NCN_Contact_Form
 */

/**
 * Class NCN_Contact_Form
 */
final class NCN_Contact_Form {

	/**
	 * Plugin instance.
	 *
	 * @var NCN_Contact_Form
	 * @access private
	 */
	private static $instance = null;

	/**
	 * Get plugin instance.
	 *
	 * @return NCN_Contact_Form
	 * @static
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * @access private
	 */
	private function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	/**
	 * Code you want to run when all other plugins loaded.
	 */
	public function init() {
		load_plugin_textdomain( 'namncn', false, NCN_CONTACT_FORM_PATH . 'languages' );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'wp_footer', array( $this, 'template' ) );
		require_once NCN_CONTACT_FORM_PATH . 'inc/ncn-contact-form-setting-page.php';
	}

	/**
	 * Print contact form template.
	 */
	function template() {
		if ( ! $title = get_option( 'ncncf-title' ) ) {
			$title = esc_html__( 'Contact Us', 'namncn' );
		}
		if ( ! $excerpt = get_option( 'ncncf-excerpt' ) ) {
			$excerpt = esc_html__( 'Use the form below to contact us!', 'namncn' );
		}
		if ( ! $shortcode = get_option( 'ncncf-shortcode' ) ) {
			$shortcode = '[contact-form-7 id="4" title="Contact form 1"]';
		}

		$template_file = NCN_CONTACT_FORM_PATH . 'templates/template.php';

		if ( locate_template( 'ncn-contact-form/template.php' ) ) {
			$template_file = locate_template( 'ncn-contact-form/template.php' );
		}

		require_once $template_file;
	}

	/**
	 * Enqueue all style and scripts.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'ncncf-style', NCN_CONTACT_FORM_URL . 'assets/css/style.css', array(), '1.0.0' );
		wp_enqueue_script( 'ncncf-script', NCN_CONTACT_FORM_URL . 'assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	}
}
