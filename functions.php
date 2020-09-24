<?php
/**
 * Registers Helper function to use with the plugin.
 *
 * @package So_Simple_Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * A dummy helper function to demonstrate how to use the helper functions.
 *
 * @return boolean true
 */
function ssp_dummy_function() {
	return true;
}

// add_action( 'init', 'ssp_dummy_function' ); // use actions or hooks to call the function.
