<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://thetophat.org
 * @since      1.0.0
 *
 * @package    Coupon_Lading_Page
 * @subpackage Coupon_Lading_Page/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Coupon_Lading_Page
 * @subpackage Coupon_Lading_Page/includes
 * @author     Matteo Zambon <matteo@thetophat.org>
 */
class Coupon_Lading_Page_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'coupon-lading-page',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
