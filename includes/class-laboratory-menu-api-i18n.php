<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://chiedolabs.com
 * @since      1.0.0
 *
 * @package    Laboratory_Menu_Api
 * @subpackage Laboratory_Menu_Api/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Laboratory_Menu_Api
 * @subpackage Laboratory_Menu_Api/includes
 * @author     Ricardo Fearing <ricardo@chiedo.com>
 */
class Laboratory_Menu_Api_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'laboratory-menu-api',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
