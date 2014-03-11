<?php
/**
 * Plugin Name: Disable Multisite Rewrites
 * Plugin URI: https://github.com/JCPry/disable-multisite-rewrites
 * Description: By default, WordPress Multisite uses certain rewrite rules for file uploads. This leads to a URL that doesn't reflect the exact location of your files on the server. This plugin disables that functionality.
 * Version: 1.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL2
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You can\'t do anything by accessing this file directly.' );
}

add_filter( 'site_option_ms_files_rewriting', '__return_false', 99999 );
add_filter( 'default_site_option_ms_files_rewriting', '__return_false', 99999 );
