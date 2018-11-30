=== Laboratory WordPress Menus Rest API ===
Contributors: ricardoLabs
Donate link: https://chiedolabs.com
Tags: menus, api
Requires at least: 4.7.1
Requires PHP: 7.2
Tested up to: 4.9.8
Stable tag: 4.9.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

# Laboratory WordPress Menus Rest API

Generate API Endpoints for WordPress menus.

## Installation

This plugin can be installed directly from your site.

* Log in and navigate to Plugins → Add New.
* Type “Laboratory WordPress Menus Rest API” into the Search and hit Enter.
* Locate the Laboratory WordPress Menus Rest API plugin in the list of search results and click Install Now.
* Once installed, click the Activate link.
* Your endpoints will automatically be available.

It can also be installed manually.

* Download the Laboratory WordPress Menus Rest API plugin from WordPress.org.
* Unzip the package and move to your plugins directory.
* Log into WordPress and navigate to the Plugins screen.
* Locate Laboratory WordPress Menus Rest API in the list and click the Activate link.

## Available Endpoints

#### Get Menu Items Endpoint: `/wp-json/lab-menus/v1/menu/{menu(string | int)}`

**Params:**

* menu - Either the slug (string) or ID (int) of a menu **e.g.**

	* `http://example.com/wp-json/lab-menus/v1/menu/main-menu`
	* `http://example.com/wp-json/lab-menus/v1/menu/2`

**Return: Array of menu item objects, otherwise false.**

```
[{
  "ID": 48,
  "menu_item_parent": "0",
  "object_id": "46",
  "object": "page",
  "type": "post_type",
  "type_label": "Page",
  "url": "http:\/\/localhost:8888\/example\/test\/",
  "title": "Academics",
  "target": "",
  "attr_title": "",
  "description": "",
  "classes": [""],
  // Rest of the details...,
}]
```

#### Get Available Menus Endpoint: `/wp-json/lab-menus/v1/menu-options`
**e.g.** `http://example.com/wp-json/lab-menus/v1/menu-options`

**Return: Array of available menus objects.**

```
[{
 "term_id": 3,
  "name": "Example Navigation",
  "slug": "example-navigation",
  "term_group": 0,
  "term_taxonomy_id": 3,
  "taxonomy": "nav_menu",
  "description": "",
  "parent": 0,
  "count": 6,
  "filter": "raw"
}]
```

#### Get Registered Menu Locations Endpoint: `/wp-json/lab-menus/v1/menu-locations`

**e.g.** `http://example.com/wp-json/lab-menus/v1/menu-locations`

**Return: (Associative Array) Array of menus registered by the theme.**

```
[
  "example-nav": 3,
  "main-navigation": 2,
  "footer-nav": 4
]
```