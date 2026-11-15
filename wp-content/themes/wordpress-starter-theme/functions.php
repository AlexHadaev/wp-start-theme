<?php
/**
 * theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */
require get_template_directory() . '/include/theme-setup.php';
require get_template_directory() . '/include/widgets.php';
require get_template_directory() . '/include/theme-scripts.php';
require get_template_directory() . '/include/clear-wp-head.php';
require get_template_directory() . '/include/customizer.php';
require get_template_directory() . '/include/custom-post-type.php';
require get_template_directory() . '/include/trim-words.php';

if ( ! function_exists( 'theme_body_classes' ) ) {
  function theme_body_classes( $classes ) {
    $classes[] = 'theme-shell';
    return $classes;
  }
}
add_filter( 'body_class', 'theme_body_classes' );