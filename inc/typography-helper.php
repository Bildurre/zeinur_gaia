<?php
/**
 * Typography Helper Functions
 */

/**
 * Get font presets
 */
function z_gaia_get_font_presets() {
  return array(
    'preset_1' => array(
      'heading' => 'inter',
      'body'    => 'inter',
    ),
    'preset_2' => array(
      'heading' => 'playfair',
      'body'    => 'lora',
    ),
    'preset_3' => array(
      'heading' => 'ebgaramond',
      'body'    => 'ebgaramond',
    ),
    'preset_4' => array(
      'heading' => 'playfair',
      'body'    => 'inter',
    ),
    'preset_5' => array(
      'heading' => 'montserrat',
      'body'    => 'lora',
    ),
    'preset_6' => array(
      'heading' => 'merriweather',
      'body'    => 'inter',
    ),
    'preset_7' => array(
      'heading' => 'roboto',
      'body'    => 'roboto',
    ),
    'preset_8' => array(
      'heading' => 'opensans',
      'body'    => 'opensans',
    ),
  );
}

/**
 * Get selected fonts
 * 
 * @return array Array with 'heading' and 'body' font slugs
 */
function z_gaia_get_selected_fonts() {
  $combination = get_theme_mod('z_gaia_font_combination', 'preset_1');
  
  if ($combination === 'custom') {
    return array(
      'heading' => get_theme_mod('z_gaia_heading_font', 'inter'),
      'body'    => get_theme_mod('z_gaia_body_font', 'inter'),
    );
  }
  
  $presets = z_gaia_get_font_presets();
  return isset($presets[$combination]) ? $presets[$combination] : $presets['preset_1'];
}

/**
 * Get font family CSS value
 * 
 * @param string $font_slug Font slug
 * @return string CSS font-family value
 */
function z_gaia_get_font_family($font_slug) {
  $fonts = array(
    'ebgaramond'   => '"EB Garamond", Georgia, serif',
    'playfair'     => '"Playfair Display", Georgia, serif',
    'inter'        => '"Inter", system-ui, -apple-system, sans-serif',
    'lora'         => '"Lora", Georgia, serif',
    'merriweather' => '"Merriweather", Georgia, serif',
    'montserrat'   => '"Montserrat", system-ui, -apple-system, sans-serif',
    'roboto'       => '"Roboto", system-ui, -apple-system, sans-serif',
    'opensans'     => '"Open Sans", system-ui, -apple-system, sans-serif',
  );
  
  return isset($fonts[$font_slug]) ? $fonts[$font_slug] : $fonts['inter'];
}

/**
 * Output typography CSS variables
 */
function z_gaia_output_typography_variables() {
  $fonts = z_gaia_get_selected_fonts();
  $base_size = get_theme_mod('z_gaia_base_font_size', 16);
  $body_line_height = get_theme_mod('z_gaia_body_line_height', 1.6);
  $heading_line_height = get_theme_mod('z_gaia_heading_line_height', 1.2);
  
  $heading_family = z_gaia_get_font_family($fonts['heading']);
  $body_family = z_gaia_get_font_family($fonts['body']);
  
  ?>
  <style id="z-gaia-typography-variables">
    :root {
      --font-family-heading: <?php echo $heading_family; ?>;
      --font-family-body: <?php echo $body_family; ?>;
      --font-size-base: <?php echo absint($base_size); ?>px;
      --line-height-body: <?php echo floatval($body_line_height); ?>;
      --line-height-heading: <?php echo floatval($heading_line_height); ?>;
    }
  </style>
  <?php
}
add_action('wp_head', 'z_gaia_output_typography_variables', 5);

/**
 * Get list of fonts to load
 * 
 * @return array Array of unique font slugs to load
 */
function z_gaia_get_fonts_to_load() {
  $fonts = z_gaia_get_selected_fonts();
  return array_unique(array_values($fonts));
}