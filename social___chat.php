<?php
/**
 *	Plugin Name: Auto Chat
 *	Plugin URI: 
 *	Deacription: AutoChat is a Social Media Manager
 *	Version: 1.0.0
 *	Text Domain: ac
 *	Domain Path: /lang
 *	Requires at least: WP 4.5
 *	Author: Ryan Herter
 *	Author URI: a-t.space
 *	License: 
 */
 
 /**
 *	Version of the plugin
 */
if ( !defined('AC_VERSION') ) define( 'AC_VERSION', '1.0.0' );
if ( !defined('AC_PATH') ) define( 'AC_PATH', plugin_dir_path( __FILE__ ) );

require( dirname( __FILE__ ) . '/install.php' );

/**
 *	Localization
 */

add_action('init', 'ac_lang_init');
function ac_lang_init() {

    load_plugin_textdomain( 'ac', false, dirname( plugin_basename( __FILE__ ) ) . '/../lang/' );
}

require( dirname( __FILE__ ) . '/core/functions.php' );
require( dirname( __FILE__ ) . '/core/handlers.php' );
require( dirname( __FILE__ ) . '/core/acheduled.php' );

require( dirname( __FILE__ ) . '/core/class/acFacebook.class.php' );
require( dirname( __FILE__ ) . '/core/class/acPinterest.class.php' );
require( dirname( __FILE__ ) . '/core/class/acTwitter.class.php' );
require( dirname( __FILE__ ) . '/core/class/acInstagram.class.php' );
require( dirname( __FILE__ ) . '/core/class/acTemplate.class.php' );
require( dirname( __FILE__ ) . '/core/class/acAdmin.class.php' );
require( dirname( __FILE__ ) . '/core/controller.php' );

register_activation_hook( __FILE__, 'ac_install' );/ac
 
