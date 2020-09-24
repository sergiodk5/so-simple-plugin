<?php
/**
 * Registers the css and js files needed.
 *
 * @package So_Simple_Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Registers the css and js files needed.
 *
 * Registers the style sheet and javascript files for later use in your custom code
 *
 * @package So_Simple_Plugin
 */
class SSP_Scripts {

	/**
	 * Initializes the registrations of the files
	 *
	 * @return void
	 */
	public function __construct() {
		// Register style sheet.
		// add_action( 'wp_enqueue_scripts', array( $this, 'ssp_css' ), 199 ); // uncomment if you want to use this file.
		// Register admin style sheet.
		// add_action( 'admin_enqueue_scripts', array( $this, 'ssp_admin_css' ) ); // uncomment if you want to use this file.
		// Register js file.
		// add_action( 'wp_enqueue_scripts', array( $this, 'ssp_js' ) ); // uncomment if you want to use this file.
		// Register admin js file.
		// add_action( 'admin_enqueue_scripts', array( $this, 'ssp_admin_js' ), 199, 1 ); // uncomment if you want to use this file.
		// Register ajax js file.
		// add_action( 'wp_enqueue_scripts', array( $this, 'ssp_ajax' ), 199, 1 ); // uncomment if you want to use this file.
	}

	/**
	 * Register and enqueue ssp-css.css style sheet.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function ssp_css() {
		wp_register_style( 'ssp_css', plugins_url( '/so-simple-plugin/assets/css/ssp-css.css' ), array(), SSP_VERSION, 'all' );
		wp_enqueue_style( 'ssp_css', array(), SSP_VERSION, 'all' );
	}

	/**
	 * Register and enqueue ssp-admin-css.css style sheet in the WordPress admin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function ssp_admin_css() {
		wp_register_style( 'ssp_wp_admin_css', plugins_url( '/so-simple-plugin/assets/css/ssp-admin-css.css' ), array(), SSP_VERSION, 'all' );
		wp_enqueue_style( 'ssp_wp_admin_css' );
	}

	/**
	 * Register and enqueue ssp-js.js javascript file.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function ssp_js() {
		wp_register_script( 'ssp_js', plugins_url( '/so-simple-plugin/assets/js/ssp-js.js' ), array( 'jquery' ), SSP_VERSION, true );
		wp_enqueue_script( 'ssp_js' );
	}

	/**
	 * Register, enqueue and localize ssp-ajax.js javascript file.
	 *
	 * @since 1.0.0
	 *
	 * @param int $hook Hook suffix for the current admin page.
	 *
	 * @return void
	 */
	public function ssp_admin_js( $hook ) {
		wp_register_script( 'ssp_admin_js', plugins_url( '/so-simple-plugin/assets/js/ssp-admin-js.js' ), array( 'jquery' ), SSP_VERSION, true );
		wp_enqueue_script( 'ssp_admin_js' );
	}

	/**
	 * Register, enqueue ssp-ajax.js javascript file in the WordPress admin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function ssp_ajax() {
		wp_register_script( 'ssp_ajax', plugins_url( '/so-simple-plugin/assets/js/ssp-ajax.js' ), array( 'jquery' ), SSP_VERSION, true );
		wp_enqueue_script( 'ssp_ajax' );
		wp_localize_script( 'ssp_ajax', 'ssp_ajax_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}
}
