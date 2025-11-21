<?php
/**
 * Customizer: Sanitization Functions
 */

/**
 * Sanitize select options
 * 
 * @param string $input   The value to sanitize
 * @param object $setting The setting object
 * @return string Sanitized value
 */
function z_gaia_sanitize_select($input, $setting) {
  $input = sanitize_key($input);
  $choices = $setting->manager->get_control($setting->id)->choices;
  return (array_key_exists($input, $choices) ? $input : $setting->default);
}

/**
 * Sanitize checkbox
 * 
 * @param bool $checked Whether the checkbox is checked
 * @return bool
 */
function z_gaia_sanitize_checkbox($checked) {
  return ((isset($checked) && true === $checked) ? true : false);
}

/**
 * Sanitize number
 * 
 * @param int $number Number to sanitize
 * @return int
 */
function z_gaia_sanitize_number($number) {
  return absint($number);
}

/**
 * Sanitize number with range
 * 
 * @param int $number Number to sanitize
 * @param object $setting The setting object
 * @return int
 */
function z_gaia_sanitize_number_range($number, $setting) {
  $number = absint($number);
  $atts = $setting->manager->get_control($setting->id)->input_attrs;
  $min = (isset($atts['min']) ? $atts['min'] : $number);
  $max = (isset($atts['max']) ? $atts['max'] : $number);
  $step = (isset($atts['step']) ? $atts['step'] : 1);
  return ($min <= $number && $number <= $max && is_int($number / $step) ? $number : $setting->default);
}