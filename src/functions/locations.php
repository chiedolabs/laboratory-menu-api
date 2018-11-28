<?php
/**
 * Functions for Menu Locations Endpoints.
 *
 * @link       https://chiedolabs.com
 * @since      1.0.0
 *
 * @package    Laboratory_Menu_Api
 * @subpackage Laboratory_Menu_Api/src/functions
 */

/**
 * Get All menus from the WordPress Admin Menus.
 */
function get_all_wordpress_menus() {
	return get_terms( 'nav_menu', array( 'hide_empty' => true ) );
}

/**
 * Register menus defined by the theme.
 */
function register_lab_menu_locations() {
	register_rest_route(
		'lab-menus/v1/',
		'menu-locations',
		array(
			'methods'  => 'GET',
			'callback' => 'return_menu_locations_callback',
		)
	);
}
