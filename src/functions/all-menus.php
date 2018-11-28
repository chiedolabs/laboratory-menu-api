<?php
/**
 * Functions for menu data endpoints.
 *
 * @link       https://chiedolabs.com
 * @since      1.0.0
 *
 * @package    Laboratory_Menu_Api
 * @subpackage Laboratory_Menu_Api/src/functions
 */

/**
 * Return Menu Route jSON.
 */
function return_menu_locations_callback() {
	$locations = get_nav_menu_locations();
	return $locations;
}

/**
 * Register Menu Endpoint.
 */
function register_lab_menus() {
	register_rest_route(
		'lab-menus/v1/',
		'menu-options',
		array(
			'methods'  => 'GET',
			'callback' => 'return_menus_callback',
		)
	);
}

/**
 * Return Menu Route jSON.
 */
function return_menus_callback() {
	$menus = get_all_wordpress_menus();
	return $menus;
}
