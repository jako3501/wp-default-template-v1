<?php 
/**
 * This is the template that displays all the <head> 
 * section and everything up until main
 * 
 * documentation: https://developer.wordpress.org/themes/basics/
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=$, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
 