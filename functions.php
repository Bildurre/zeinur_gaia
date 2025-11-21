<?php

function z_gaia_setup() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'z_gaia_setup');

function z_gaia_scripts() {
  wp_enqueue_style('z-gaia-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'z_gaia_scripts');