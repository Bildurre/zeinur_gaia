<?php
/**
 * Customizer: Colors Settings
 */

function z_gaia_customizer_colors($wp_customize) {
  
  // Colors Section
  $wp_customize->add_section('z_gaia_colors', array(
    'title'    => __('Theme Colors', 'z-gaia'),
    'priority' => 25,
  ));
  
  // === BRAND COLORS ===
  
  // Primary Color
  $wp_customize->add_setting('z_gaia_color_primary', array(
    'default'           => '#0066cc',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_primary', array(
    'label'       => __('Primary Color', 'z-gaia'),
    'description' => __('Main brand color', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Secondary Color
  $wp_customize->add_setting('z_gaia_color_secondary', array(
    'default'           => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_secondary', array(
    'label'       => __('Secondary Color', 'z-gaia'),
    'description' => __('Secondary brand color', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Tertiary Color
  $wp_customize->add_setting('z_gaia_color_tertiary', array(
    'default'           => '#ff6600',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_tertiary', array(
    'label'       => __('Tertiary Color', 'z-gaia'),
    'description' => __('Accent color for CTAs and highlights', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // === TEXT COLORS ===
  
  // Primary Text Color
  $wp_customize->add_setting('z_gaia_color_text', array(
    'default'           => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_text', array(
    'label'       => __('Primary Text Color', 'z-gaia'),
    'description' => __('Main text color for body content', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Secondary Text Color
  $wp_customize->add_setting('z_gaia_color_text_secondary', array(
    'default'           => '#666666',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_text_secondary', array(
    'label'       => __('Secondary Text Color', 'z-gaia'),
    'description' => __('Color for secondary text, captions, and meta info', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Heading Color
  $wp_customize->add_setting('z_gaia_color_heading', array(
    'default'           => '#1a1a1a',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_heading', array(
    'label'       => __('Heading Color', 'z-gaia'),
    'description' => __('Color for headings (h1, h2, h3, etc.)', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // === BACKGROUND COLORS ===
  
  // Background Color
  $wp_customize->add_setting('z_gaia_color_background', array(
    'default'           => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_background', array(
    'label'       => __('Background Color', 'z-gaia'),
    'description' => __('Main background color', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Secondary Background Color
  $wp_customize->add_setting('z_gaia_color_background_secondary', array(
    'default'           => '#f5f5f5',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_background_secondary', array(
    'label'       => __('Secondary Background Color', 'z-gaia'),
    'description' => __('Alternate background for sections and cards', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // === LINK COLORS ===
  
  // Link Color
  $wp_customize->add_setting('z_gaia_color_link', array(
    'default'           => '#0066cc',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_link', array(
    'label'       => __('Link Color', 'z-gaia'),
    'description' => __('Color for links', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Link Hover Color
  $wp_customize->add_setting('z_gaia_color_link_hover', array(
    'default'           => '#004499',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_link_hover', array(
    'label'       => __('Link Hover Color', 'z-gaia'),
    'description' => __('Color for links on hover', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // === BORDER & SEPARATOR COLORS ===
  
  // Border Color
  $wp_customize->add_setting('z_gaia_color_border', array(
    'default'           => '#e0e0e0',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_border', array(
    'label'       => __('Border Color', 'z-gaia'),
    'description' => __('Color for borders and dividers', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // === STATE COLORS ===
  
  // Success Color
  $wp_customize->add_setting('z_gaia_color_success', array(
    'default'           => '#28a745',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_success', array(
    'label'       => __('Success Color', 'z-gaia'),
    'description' => __('Color for success messages and states', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Warning Color
  $wp_customize->add_setting('z_gaia_color_warning', array(
    'default'           => '#ffc107',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_warning', array(
    'label'       => __('Warning Color', 'z-gaia'),
    'description' => __('Color for warning messages', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Error Color
  $wp_customize->add_setting('z_gaia_color_error', array(
    'default'           => '#dc3545',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_error', array(
    'label'       => __('Error Color', 'z-gaia'),
    'description' => __('Color for error messages and states', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
  
  // Info Color
  $wp_customize->add_setting('z_gaia_color_info', array(
    'default'           => '#17a2b8',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'z_gaia_color_info', array(
    'label'       => __('Info Color', 'z-gaia'),
    'description' => __('Color for info messages', 'z-gaia'),
    'section'     => 'z_gaia_colors',
  )));
}
add_action('customize_register', 'z_gaia_customizer_colors');