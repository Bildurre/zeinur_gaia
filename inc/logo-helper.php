<?php
/**
 * Logo Helper Functions
 */

/**
 * Get logo image
 * 
 * @param string $type Logo type: 'primary', 'primary-alternate', 'small', 'small-alternate'
 * @return string|false Logo URL or false if not set
 */
function z_gaia_get_logo($type = 'primary') {
  $setting_name = "z_gaia_logo_" . str_replace('-', '_', $type);
  $logo_id = get_theme_mod($setting_name, '');
  
  if (empty($logo_id)) {
    return false;
  }
  
  return wp_get_attachment_image_url($logo_id, 'full');
}

/**
 * Display logo
 * 
 * @param array $args Configuration arguments
 */
function z_gaia_logo($args = array()) {
  $defaults = array(
    'type'  => 'primary',  // 'primary', 'primary-alternate', 'small', 'small-alternate'
    'class' => '',
    'link'  => true,       // Wrap in link to home
  );
  
  $args = wp_parse_args($args, $defaults);
  
  $logo_url = z_gaia_get_logo($args['type']);
  $site_name = get_bloginfo('name');
  
  // Determine logo width based on type
  if (strpos($args['type'], 'small') !== false) {
    $logo_width = get_theme_mod('z_gaia_logo_small_width', 100);
  } else {
    $logo_width = get_theme_mod('z_gaia_logo_width', 200);
  }
  
  // If no logo, show site name
  if (!$logo_url) {
    if ($args['link']) {
      echo '<a href="' . esc_url(home_url('/')) . '" class="site-title ' . esc_attr($args['class']) . '">';
      echo esc_html($site_name);
      echo '</a>';
    } else {
      echo '<span class="site-title ' . esc_attr($args['class']) . '">' . esc_html($site_name) . '</span>';
    }
    return;
  }
  
  // Build classes
  $classes = array('site-logo');
  if (!empty($args['class'])) {
    $classes[] = $args['class'];
  }
  $classes[] = 'site-logo--' . str_replace('_', '-', $args['type']);
  
  // Output logo
  if ($args['link']) {
    echo '<a href="' . esc_url(home_url('/')) . '" class="' . esc_attr(implode(' ', $classes)) . '" rel="home">';
  } else {
    echo '<div class="' . esc_attr(implode(' ', $classes)) . '">';
  }
  
  echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr($site_name) . '" style="max-width: ' . absint($logo_width) . 'px; height: auto;">';
  
  if ($args['link']) {
    echo '</a>';
  } else {
    echo '</div>';
  }
}

/**
 * Check if logo exists
 * 
 * @param string $type Logo type: 'primary', 'primary-alternate', 'small', 'small-alternate'
 * @return bool
 */
function z_gaia_has_logo($type = 'primary') {
  return (bool) z_gaia_get_logo($type);
}

/**
 * Get logo with fallback
 * Falls back to primary logo if alternate doesn't exist
 * 
 * @param string $type Logo type
 * @return string|false Logo URL or false
 */
function z_gaia_get_logo_with_fallback($type = 'primary') {
  $logo = z_gaia_get_logo($type);
  
  if (!$logo) {
    // Fallback logic
    if ($type === 'primary-alternate') {
      return z_gaia_get_logo('primary');
    }
    if ($type === 'small-alternate') {
      return z_gaia_get_logo('small') ?: z_gaia_get_logo('primary');
    }
    if ($type === 'small') {
      return z_gaia_get_logo('primary');
    }
  }
  
  return $logo;
}