<?php
/**
 * Registers Dummy Shortcode to use with the theme.
 *
 * @package So_Simple_Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Registers Shortcode to handle the theme.
 *
 * @package So_Simple_Plugin
 */
class SSP_Dummy_Shortcode {

	/**
	 * Initializes the registrations of the shortcode.
	 */
	public function __construct() {
		// Register the shortcode for the activation key Dashboard.
		add_shortcode( 'ssp-dummy-shortcode', array( $this, 'ppc_dummy_shortcode' ) );
	}

	/**
	 * A dummy shortcode to use with your theme.
	 *
	 * @param  array  $attributes  Shortcode attributes.
	 * @param  string $content     The text content for shortcode.
	 *
	 * @return string The shortcode output
	 */
	public function ppc_dummy_shortcode( $attributes, $content = null ) {
		// Parse shortcode attributes.
		$default_attributes = array();
		$attributes         = shortcode_atts( $default_attributes, $attributes );

		$html = '<h1>Hello World!</h1>';

		return $html;
	}
}
