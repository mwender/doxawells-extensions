<?php
/**
 * Plugin Name:     DOXA Wells Extensions
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Various extensions and enhancements to the DOXA Wells website code.
 * Author:          TheWebist
 * Author URI:      https://mwender.com
 * Text Domain:     doxawells-extensions
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Doxawells_Extensions
 */

// Your code starts here

function custom_max_donation_message( $translations, $text, $domain ){
	if ( $domain == 'give' && $text == 'The maximum custom donation amount for this form is' ) {
		$translations = __( 'Please go <a href="' . site_url( '/donations/major-gifts/', 'https' ) . '">here</a> for instructions on donating more than', 'give' );
	}
	return $translations;
}
add_filter( 'gettext', 'custom_max_donation_message', 10, 3 );
