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
 * Return menus defined by the theme.
 */
function lab_menu_rest_registered_locations() {
	register_rest_route(
		'lab-menus/v1/',
		'menu-locations',
		array(
			'methods'  => 'GET',
			'callback' => 'lab_menu_rest_registered_menus_callback',
		)
	);
}

/**
 * Get all nav menus from registred by register_nav_menu().
 */
function lab_menu_rest_registered_menus_callback() {
	return get_registered_nav_menus();
}
