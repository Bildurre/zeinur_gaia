<?php
/**
 * Customizer: Typography Settings
 */

function z_gaia_customizer_typography($wp_customize) {
  
  // Typography Section
  $wp_customize->add_section('z_gaia_typography', array(
    'title'    => __('Typography', 'z-gaia'),
    'priority' => 30,
  ));
  
  // Base Font Size
  $wp_customize->add_setting('z_gaia_base_font_size', array(
    'default'           => 16,
    'sanitize_callback' => 'absint',
    'transport'         => 'refresh',
  ));
  
  $wp_customize->add_control('z_gaia_base_font_size', array(
    'label'       => __('Base Font Size (px)', 'z-gaia'),
    'description' => __('Base font size for body text', 'z-gaia'),
    'section'     => 'z_gaia_typography',
    'type'        => 'number',
    'input_attrs' => array(
      'min'  => 14,
      'max'  => 20,
      'step' => 1,
    ),
  ));
  
  // Body Line Height
  $wp_customize->add_setting('z_gaia_body_line_height', array(
    'default'           => 1.6,
    'sanitize_callback' => 'z_gaia_sanitize_number_range',
    'transport'         => 'refresh',
  ));
  
  $wp_customize->add_control('z_gaia_body_line_height', array(
    'label'       => __('Body Line Height', 'z-gaia'),
    'description' => __('Line height multiplier for body text', 'z-gaia'),
    'section'     => 'z_gaia_typography',
    'type'        => 'number',
    'input_attrs' => array(
      'min'  => 1.2,
      'max'  => 2.0,
      'step' => 0.1,
    ),
  ));
  
  // Heading Line Height
  $wp_customize->add_setting('z_gaia_heading_line_height', array(
    'default'           => 1.2,
    'sanitize_callback' => 'z_gaia_sanitize_number_range',
    'transport'         => 'refresh',
  ));
  
  $wp_customize->add_control('z_gaia_heading_line_height', array(
    'label'       => __('Heading Line Height', 'z-gaia'),
    'description' => __('Line height multiplier for headings', 'z-gaia'),
    'section'     => 'z_gaia_typography',
    'type'        => 'number',
    'input_attrs' => array(
      'min'  => 1.0,
      'max'  => 1.5,
      'step' => 0.05,
    ),
  ));
  
  // Font Combination
  $wp_customize->add_setting('z_gaia_font_combination', array(
    'default'           => 'preset_1',
    'sanitize_callback' => 'z_gaia_sanitize_select',
  ));
  
  $wp_customize->add_control('z_gaia_font_combination', array(
    'label'   => __('Font Combination', 'z-gaia'),
    'section' => 'z_gaia_typography',
    'type'    => 'select',
    'choices' => array(
      'preset_1' => __('Modern & Clean (Inter / Inter)', 'z-gaia'),
      'preset_2' => __('Editorial (Playfair Display / Lora)', 'z-gaia'),
      'preset_3' => __('Classic (EB Garamond / EB Garamond)', 'z-gaia'),
      'preset_4' => __('Elegant (Playfair Display / Inter)', 'z-gaia'),
      'preset_5' => __('Contemporary (Montserrat / Lora)', 'z-gaia'),
      'preset_6' => __('Professional (Merriweather / Inter)', 'z-gaia'),
      'preset_7' => __('Universal (Roboto / Roboto)', 'z-gaia'),
      'preset_8' => __('Friendly (Open Sans / Open Sans)', 'z-gaia'),
      'custom'   => __('Custom - Choose Your Own', 'z-gaia'),
    ),
  ));
  
  // Custom Heading Font
  $wp_customize->add_setting('z_gaia_heading_font', array(
    'default'           => 'inter',
    'sanitize_callback' => 'z_gaia_sanitize_select',
  ));
  
  $wp_customize->add_control('z_gaia_heading_font', array(
    'label'           => __('Heading Font Family', 'z-gaia'),
    'description'     => __('Only applies when "Custom" is selected', 'z-gaia'),
    'section'         => 'z_gaia_typography',
    'type'            => 'select',
    'choices'         => z_gaia_get_font_choices(),
    'active_callback' => function() use ($wp_customize) {
      return 'custom' === $wp_customize->get_setting('z_gaia_font_combination')->value();
    },
  ));
  
  // Custom Body Font
  $wp_customize->add_setting('z_gaia_body_font', array(
    'default'           => 'inter',
    'sanitize_callback' => 'z_gaia_sanitize_select',
  ));
  
  $wp_customize->add_control('z_gaia_body_font', array(
    'label'           => __('Body Font Family', 'z-gaia'),
    'description'     => __('Only applies when "Custom" is selected', 'z-gaia'),
    'section'         => 'z_gaia_typography',
    'type'            => 'select',
    'choices'         => z_gaia_get_font_choices(),
    'active_callback' => function() use ($wp_customize) {
      return 'custom' === $wp_customize->get_setting('z_gaia_font_combination')->value();
    },
  ));
}
add_action('customize_register', 'z_gaia_customizer_typography');

/**
 * Get available font choices
 */
function z_gaia_get_font_choices() {
  return array(
    'ebgaramond'   => __('EB Garamond', 'z-gaia'),
    'playfair'     => __('Playfair Display', 'z-gaia'),
    'inter'        => __('Inter', 'z-gaia'),
    'lora'         => __('Lora', 'z-gaia'),
    'merriweather' => __('Merriweather', 'z-gaia'),
    'montserrat'   => __('Montserrat', 'z-gaia'),
    'roboto'       => __('Roboto', 'z-gaia'),
    'opensans'     => __('Open Sans', 'z-gaia'),
  );
}