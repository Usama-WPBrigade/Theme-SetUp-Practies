<?php
/**
 * Theme functions and definitions
 *
 * @package CUSTOMTHEME_THEME
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined('CUSTOMTHEME_THEME_VERSION') ) {
	define( 'CUSTOMTHEME_THEME_VERSION', '1.0.0' );
}
if ( ! defined('CUSTOMTHEME_TEXTDOMAIN') ) {
	define( 'CUSTOMTHEME_TEXTDOMAIN', 'customthemechild' );
}

if ( ! defined('CUSTOMTHEME_THEME_URI') ) {
	define( 'CUSTOMTHEME_THEME_URI', get_stylesheet_directory_uri() );
}

if ( ! defined('CUSTOMTHEME_THEME_DIR') ) {
	define( 'CUSTOMTHEME_THEME_DIR', get_stylesheet_directory() );
}

if ( ! defined('CUSTOMTHEME_THEME_INC_DIR') ) {
	define( 'CUSTOMTHEME_THEME_INC_DIR', CUSTOMTHEME_THEME_DIR . '/includes' );
}


// General functions
require_once CUSTOMTHEME_THEME_INC_DIR . '/general-functions.php';

// Theme setup and script/style enqueue
require_once CUSTOMTHEME_THEME_INC_DIR . '/theme.php';

// WP actions/filters
require_once CUSTOMTHEME_THEME_INC_DIR . '/wp-hooks.php';

// Functions/Hooks related to ACF
require_once CUSTOMTHEME_THEME_INC_DIR . '/acf.php';

// AJAX functions
require_once CUSTOMTHEME_THEME_INC_DIR . '/ajax.php';

// Gravity Forms Hooks
require_once CUSTOMTHEME_THEME_INC_DIR . '/gform.php';

// Contains all the shortcodes
require_once CUSTOMTHEME_THEME_INC_DIR . '/shortcodes.php';
