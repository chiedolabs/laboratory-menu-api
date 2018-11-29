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
 * Register 'All Menus' Endpoint.
 */
function lab_menu_rest_all_menus() {
	register_rest_route(
		'lab-menus/v1/',
		'menu-options',
		array(
			'methods'  => 'GET',
			'callback' => 'lab_menu_rest_all_menus_callback',
		)
	);
}

/**
 * Get All menus from the WordPress Admin Menus.
 */
function lab_menu_rest_all_menus_callback() {
	return get_terms( 'nav_menu', array( 'hide_empty' => true ) );
}
