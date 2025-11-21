<?php
/**
 * Colors Helper Functions
 */

/**
 * Output CSS variables for theme colors in the head
 */
function z_gaia_output_color_variables() {
  // Brand Colors
  $primary = get_theme_mod('z_gaia_color_primary', '#0066cc');
  $secondary = get_theme_mod('z_gaia_color_secondary', '#333333');
  $tertiary = get_theme_mod('z_gaia_color_tertiary', '#ff6600');
  
  // Text Colors
  $text = get_theme_mod('z_gaia_color_text', '#333333');
  $text_secondary = get_theme_mod('z_gaia_color_text_secondary', '#666666');
  $heading = get_theme_mod('z_gaia_color_heading', '#1a1a1a');
  
  // Background Colors
  $background = get_theme_mod('z_gaia_color_background', '#ffffff');
  $background_secondary = get_theme_mod('z_gaia_color_background_secondary', '#f5f5f5');
  
  // Link Colors
  $link = get_theme_mod('z_gaia_color_link', '#0066cc');
  $link_hover = get_theme_mod('z_gaia_color_link_hover', '#004499');
  
  // Border Colors
  $border = get_theme_mod('z_gaia_color_border', '#e0e0e0');
  
  // State Colors
  $success = get_theme_mod('z_gaia_color_success', '#28a745');
  $warning = get_theme_mod('z_gaia_color_warning', '#ffc107');
  $error = get_theme_mod('z_gaia_color_error', '#dc3545');
  $info = get_theme_mod('z_gaia_color_info', '#17a2b8');
  
  ?>
  <style id="z-gaia-color-variables">
    :root {
      /* Brand Colors */
      --color-primary: <?php echo esc_attr($primary); ?>;
      --color-secondary: <?php echo esc_attr($secondary); ?>;
      --color-tertiary: <?php echo esc_attr($tertiary); ?>;
      
      /* Text Colors */
      --color-text: <?php echo esc_attr($text); ?>;
      --color-text-secondary: <?php echo esc_attr($text_secondary); ?>;
      --color-heading: <?php echo esc_attr($heading); ?>;
      
      /* Background Colors */
      --color-background: <?php echo esc_attr($background); ?>;
      --color-background-secondary: <?php echo esc_attr($background_secondary); ?>;
      
      /* Link Colors */
      --color-link: <?php echo esc_attr($link); ?>;
      --color-link-hover: <?php echo esc_attr($link_hover); ?>;
      
      /* Border Colors */
      --color-border: <?php echo esc_attr($border); ?>;
      
      /* State Colors */
      --color-success: <?php echo esc_attr($success); ?>;
      --color-warning: <?php echo esc_attr($warning); ?>;
      --color-error: <?php echo esc_attr($error); ?>;
      --color-info: <?php echo esc_attr($info); ?>;
    }
    
    body {
      color: var(--color-text);
      background-color: var(--color-background);
    }
    
    h1, h2, h3, h4, h5, h6 {
      color: var(--color-heading);
    }
    
    a {
      color: var(--color-link);
    }
    
    a:hover {
      color: var(--color-link-hover);
    }
  </style>
  <?php
}
add_action('wp_head', 'z_gaia_output_color_variables');