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

add_action( 'rest_api_init', 'lab_menu_rest_registered_locations' ); // Every registred menu location i.e. defined by register_nav_menu().
add_action( 'rest_api_init', 'lab_menu_rest_all_menus' ); // Every WordPress Menu.
add_action( 'rest_api_init', 'lab_menu_rest_menu_items' ); // Single Nav Menu links.
