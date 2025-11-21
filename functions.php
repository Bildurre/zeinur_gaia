<?php
/**
 * Z Gaia Theme Functions
 * 
 * @package Z_Gaia
 * @version 1.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Theme constants
 */
define('Z_GAIA_VERSION', '1.0.0');
define('Z_GAIA_DIR', get_template_directory());
define('Z_GAIA_URI', get_template_directory_uri());

/**
 * Include helper files
 */
require_once Z_GAIA_DIR . '/inc/social-media.php';

/**
 * Include customizer files
 */
require_once Z_GAIA_DIR . '/inc/customizer/sanitize.php';
require_once Z_GAIA_DIR . '/inc/customizer/social-media.php';

/**
 * Theme setup
 */
function z_gaia_setup() {
  // Add support for title tag
  add_theme_support('title-tag');
  
  // Add support for post thumbnails
  add_theme_support('post-thumbnails');
  
  // Register navigation menus
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'z-gaia'),
  ));
}
add_action('after_setup_theme', 'z_gaia_setup');

/**
 * Enqueue scripts and styles
 */
function z_gaia_scripts() {
  // Main stylesheet from dist folder
  wp_enqueue_style(
    'z-gaia-style',
    Z_GAIA_URI . '/assets/dist/style.css',
    array(),
    filemtime(Z_GAIA_DIR . '/assets/dist/style.css')
  );
  
  // Main JavaScript from dist folder
  wp_enqueue_script(
    'z-gaia-main',
    Z_GAIA_URI . '/assets/dist/main.js',
    array(),
    filemtime(Z_GAIA_DIR . '/assets/dist/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'z_gaia_scripts');