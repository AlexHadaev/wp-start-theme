<?php
function theme_scripts() {
  // Styles
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'theme-main-style', get_template_directory_uri() . '/assets/dist/main.min.css' );
  wp_enqueue_style( 'theme-custom-style', get_template_directory_uri() . '/assets/css/custom.css' );
  // Scripts
  wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/dist/main.min.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
