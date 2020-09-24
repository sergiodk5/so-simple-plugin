<?php
/**
 * Registers API functions to use with the plugin.
 *
 * @package So_Simple_Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Dummy function to use with ajax calls.
 *
 * @since 1.0.0
 * @return void
 */
function ssp_dummy_api_call() {
	echo 'Hello World';
	die();
}
// add_action( 'wp_ajax_ssp_dummy_api_call', 'ssp_dummy_api_call' ); // uncomment if you want to use this function.
// add_action( 'wp_ajax_nopriv_ssp_dummy_api_call', 'ssp_dummy_api_call' ); // uncomment if you want to use this function.
