<?php
/**
 * Functions for Menu Items Endpoints.
 *
 * @link       https://chiedolabs.com
 * @since      1.0.0
 *
 * @package    Laboratory_Menu_Api
 * @subpackage Laboratory_Menu_Api/src/functions
 */

/**
 * Register Menu Endpoint.
 */
function register_lab_menu_items() {
	/* e.g. siteurl/wp-json/lab-menus/v2/header-menu */
	$slug_regex = '/(?P<slug>[a-zA-Z0-9-]+)';

	register_rest_route(
		'lab-menus/v1/menu/',
		$slug_regex,
		array(
			'methods'  => 'GET',
			'callback' => 'menu_items_callback',
		)
	);
}

/**
 * Return Menu Route jSON.
 *
 * @param Object $data The Request Object.
 */
function menu_items_callback( $data ) {
	if ( empty( $data['slug'] ) ) {
		return new WP_Error(
			'no_menus',
			'We could not find the menu you requested',
			array(
				'status' => 404,
			)
		);
	}
	$menu = wp_get_nav_menu_items( $data['slug'] );
	return $menu;
}
