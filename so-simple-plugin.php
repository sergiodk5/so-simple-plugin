<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also defines a function that starts the plugin.
 *
 * @package    So_Simple_Plugin
 * @author     Asterios Patsikas <sergiodk5@gmail.com>
 * @copyright  2020 Asterios Patsikas
 * @license    GPL 2.0+
 * @link       https://sergiodk5.com/wp/plugins/so-simple-plugin
 * @since      1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       So Simple Plugin
 * Plugin URI:        https://sergiodk5.com/wp/plugins/so-simple-plugin
 * Description:       This plugin creates a css, a js( jQuery loads @ footer ) file, helper functions and a dummy shortcode to use for your custom code
 * Version:           1.0.0
 * Author:            Asterios Patsikas
 * Author URI:        http://sergiodk5.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Requires PHP:      5.6
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define plugin file path constant.
define( 'SO_SIMPLE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
// Define plugin Version constant.
define( 'SSP_VERSION', '1.0.0' );

// Include the dependencies needed to instantiate the plugin.
foreach ( glob( SO_SIMPLE_PLUGIN_PATH . 'class/*.php' ) as $file ) {
	include_once $file;
}

add_action( 'plugins_loaded', 'so_simple_plugin_init', 100 );

/**
 * Starts the plugin.
 *
 * @since 1.0.0
 */
function so_simple_plugin_init() {
	$scripts = new SSP_Scripts();
	// $dummy_shortcode = new SSP_Dummy_Shortcode(); // uncomment if you whant to use this shortcode.
}

// Include helper functions.
require_once SO_SIMPLE_PLUGIN_PATH . 'functions.php';
