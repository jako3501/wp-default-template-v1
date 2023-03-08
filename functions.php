<?php
  function custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );
    
  }
  add_action( 'wp_enqueue_scripts', 'custom_styles' );
?>