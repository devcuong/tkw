<?php
/**
 * Plugin Name: NCN Contact Form
 * Plugin URI: http://namncn.com/plugins/namncn-contact-form/
 * Description: Create contact form in footer.
 * Author: Nam NCN
 * Author URI: http://namncn.com/
 * Version: 1.0.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: namncn
 * Domain Path: /languages
 *
 * @package NCN_Contact_Form
 */

/*
Copyright (C) 2017 Nam NCN (namncn) namtruongncn@gmail.com

NCN Contact Form is free software under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

NCN Contact Form is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Any Posts Widget. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( defined( 'NCN_CONTACT_FORM_VERSION' ) ) {
	return;
}

define( 'NCN_CONTACT_FORM_VERSION', '1.0.0' );
define( 'NCN_CONTACT_FORM_FILE', __FILE__ );
define( 'NCN_CONTACT_FORM_PATH', plugin_dir_path( NCN_CONTACT_FORM_FILE ) );
define( 'NCN_CONTACT_FORM_URL', plugin_dir_url( NCN_CONTACT_FORM_FILE ) );

require_once NCN_CONTACT_FORM_PATH . 'class-ncn-contact-form.php';

if ( ! function_exists( 'ncn_contact_form' ) ) {
	/**
	 * Get plugin instance.
	 *
	 * @return NCN_Contact_Form
	 */
	function ncn_contact_form() {
		return NCN_Contact_Form::get_instance();
	}
}

$GLOBALS['ncn_contact_form'] = ncn_contact_form();
