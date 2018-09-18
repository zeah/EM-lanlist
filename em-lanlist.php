<?php
/*
Plugin Name: EM Lånlist 
Description: liste over Lån
Version: 1.0.5
GitHub Plugin URI: zeah/EM-lanlist
*/

defined('ABSPATH') or die('Blank Space');

// constant for plugin location
define('LANLIST_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once 'inc/lan-posttype.php';
require_once 'inc/lan-shortcode.php';

function init_emlanlist() {
	Lan_posttype::get_instance();
	Lan_shortcode::get_instance();
}
add_action('plugins_loaded', 'init_emlanlist');