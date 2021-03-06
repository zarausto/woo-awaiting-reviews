<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.nw2web.com.br
 * @since             1.0.0
 * @package           Woo_Awaiting_Reviews
 *
 * @wordpress-plugin
 * Plugin Name:       Woo Awaiting Reviews
 * Plugin URI:        www.nw2web.com.br
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.1
 * Author:            Fausto Rodrigo Toloi
 * Author URI:        www.nw2web.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-awaiting-reviews
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-awaiting-reviews-activator.php
 */
function activate_woo_awaiting_reviews() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-awaiting-reviews-activator.php';
	Woo_Awaiting_Reviews_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-awaiting-reviews-deactivator.php
 */
function deactivate_woo_awaiting_reviews() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-awaiting-reviews-deactivator.php';
	Woo_Awaiting_Reviews_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_awaiting_reviews' );
register_deactivation_hook( __FILE__, 'deactivate_woo_awaiting_reviews' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-awaiting-reviews.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_awaiting_reviews() {

	$plugin = new Woo_Awaiting_Reviews();
	$plugin->run();

}
run_woo_awaiting_reviews();
