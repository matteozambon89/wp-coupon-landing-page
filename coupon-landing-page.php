<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://thetophat.org
 * @since             1.0.0
 * @package           Coupon_Landing_Page
 *
 * @wordpress-plugin
 * Plugin Name:       Coupon Landing Page
 * Plugin URI:        https://github.com/matteozambon89/wp-coupon-landing-page
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matteo Zambon
 * Author URI:        http://thetophat.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       coupon-landing-page
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-coupon-landing-page-activator.php
 */
function activate_coupon_landing_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-coupon-landing-page-activator.php';
	Coupon_Landing_Page_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-coupon-landing-page-deactivator.php
 */
function deactivate_coupon_landing_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-coupon-landing-page-deactivator.php';
	Coupon_Landing_Page_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_coupon_landing_page' );
register_deactivation_hook( __FILE__, 'deactivate_coupon_landing_page' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-coupon-landing-page.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_coupon_landing_page() {

	$plugin = new Coupon_Landing_Page();
	$plugin->run();

}
run_coupon_landing_page();
