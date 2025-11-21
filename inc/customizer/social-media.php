<?php
/**
 * Customizer: Social Media Settings
 */

function z_gaia_customizer_social_media($wp_customize) {
  
  // Social Media Section
  $wp_customize->add_section('z_gaia_social_media', array(
    'title'    => __('Social Media', 'z-gaia'),
    'priority' => 30,
  ));
  
  // Icon Style Setting
  $wp_customize->add_setting('z_gaia_social_icon_style', array(
    'default'           => 'rounded',
    'sanitize_callback' => 'z_gaia_sanitize_select',
  ));
  
  $wp_customize->add_control('z_gaia_social_icon_style', array(
    'label'   => __('Icon Style', 'z-gaia'),
    'section' => 'z_gaia_social_media',
    'type'    => 'select',
    'choices' => array(
      'rounded' => __('Rounded', 'z-gaia'),
      'square'  => __('Square', 'z-gaia'),
      'circle'  => __('Circle', 'z-gaia'),
      'minimal' => __('Minimal', 'z-gaia'),
    ),
  ));
  
  // Social Media URLs
  $social_networks = array(
    'facebook'  => __('Facebook', 'z-gaia'),
    'instagram' => __('Instagram', 'z-gaia'),
    'twitter'   => __('Twitter / X', 'z-gaia'),
    'linkedin'  => __('LinkedIn', 'z-gaia'),
    'youtube'   => __('YouTube', 'z-gaia'),
  );
  
  foreach ($social_networks as $network => $label) {
    $wp_customize->add_setting("z_gaia_social_{$network}", array(
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control("z_gaia_social_{$network}", array(
      'label'       => $label . ' ' . __('URL', 'z-gaia'),
      'section'     => 'z_gaia_social_media',
      'type'        => 'url',
      'placeholder' => 'https://...',
    ));
  }
}
add_action('customize_register', 'z_gaia_customizer_social_media');