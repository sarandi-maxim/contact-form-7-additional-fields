<?php
/**
 * Plugin Name: Contact Form 7 Additional Fields
 * Plugin URI: https://github.com/sarandi-maxim/contact-form-7-AF
 * Description: Contact Form 7 extension.
 * Author: Maksym Sarandi
 * Author URI: https://github.com/sarandi-maxim/
 * Text Domain: contact-form-7-AF
 * Domain Path: /languages/
 * Version: 0.0.1
 *
 * @package WordPress
 */

define( 'WPCF7_AF_VERSION', '0.0.1' );

define( 'WPCF7_AF_REQUIRED_WP_VERSION', '4.9' );

define( 'WPCF7_AF_PLUGIN', __FILE__ );

define( 'WPCF7_AF_PLUGIN_BASENAME', plugin_basename( WPCF7_AF_PLUGIN ) );

define( 'WPCF7_AF_PLUGIN_NAME', trim( dirname( WPCF7_AF_PLUGIN_BASENAME ), '/' ) );

define( 'WPCF7_AF_PLUGIN_DIR', untrailingslashit( dirname( WPCF7_AF_PLUGIN ) ) );

require_once __DIR__ . '/load.php';
