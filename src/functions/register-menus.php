<?php
/**
 * Register the menus as jSON endpoints.
 *
 * @link       https://chiedolabs.com
 * @since      1.0.0
 *
 * @package    Laboratory_Menu_Api
 * @subpackage Laboratory_Menu_Api/src/functions
 */

require_once 'locations.php';
require_once 'menu-items.php';
require_once 'all-menus.php';

add_action( 'rest_api_init', 'register_lab_menu_locations' );
add_action( 'rest_api_init', 'register_lab_menus' );
add_action( 'rest_api_init', 'register_lab_menu_items' );
