<?php
/**
 * Customizer: Site Identity Settings
 * Extends WordPress default Site Identity section with logo options
 */

function z_gaia_customizer_site_identity($wp_customize) {
  
  // Logo Width Setting
  $wp_customize->add_setting('z_gaia_logo_width', array(
    'default'           => 200,
    'sanitize_callback' => 'absint',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control('z_gaia_logo_width', array(
    'label'       => __('Logo Width (px)', 'z-gaia'),
    'description' => __('Maximum width for logos', 'z-gaia'),
    'section'     => 'title_tagline',
    'type'        => 'number',
    'input_attrs' => array(
      'min'  => 50,
      'max'  => 500,
      'step' => 10,
    ),
  ));
  
  // Small Logo Width Setting
  $wp_customize->add_setting('z_gaia_logo_small_width', array(
    'default'           => 100,
    'sanitize_callback' => 'absint',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control('z_gaia_logo_small_width', array(
    'label'       => __('Small Logo Width (px)', 'z-gaia'),
    'description' => __('Maximum width for small logos', 'z-gaia'),
    'section'     => 'title_tagline',
    'type'        => 'number',
    'input_attrs' => array(
      'min'  => 30,
      'max'  => 300,
      'step' => 10,
    ),
  ));
  
  // Primary Logo
  $wp_customize->add_setting('z_gaia_logo_primary', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ));
  
  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'z_gaia_logo_primary', array(
    'label'       => __('Primary Logo', 'z-gaia'),
    'description' => __('Main logo for the site', 'z-gaia'),
    'section'     => 'title_tagline',
    'mime_type'   => 'image',
  )));
  
  // Primary Logo Alternate
  $wp_customize->add_setting('z_gaia_logo_primary_alternate', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ));
  
  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'z_gaia_logo_primary_alternate', array(
    'label'       => __('Primary Logo Alternate', 'z-gaia'),
    'description' => __('Alternative version of primary logo (e.g., for sticky header, horizontal version)', 'z-gaia'),
    'section'     => 'title_tagline',
    'mime_type'   => 'image',
  )));
  
  // Small Logo
  $wp_customize->add_setting('z_gaia_logo_small', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ));
  
  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'z_gaia_logo_small', array(
    'label'       => __('Small Logo', 'z-gaia'),
    'description' => __('Compact logo version (e.g., for mobile, footer)', 'z-gaia'),
    'section'     => 'title_tagline',
    'mime_type'   => 'image',
  )));
  
  // Small Logo Alternate
  $wp_customize->add_setting('z_gaia_logo_small_alternate', array(
    'default'           => '',
    'sanitize_callback' => 'absint',
  ));
  
  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'z_gaia_logo_small_alternate', array(
    'label'       => __('Small Logo Alternate', 'z-gaia'),
    'description' => __('Alternative version of small logo', 'z-gaia'),
    'section'     => 'title_tagline',
    'mime_type'   => 'image',
  )));
}
add_action('customize_register', 'z_gaia_customizer_site_identity');