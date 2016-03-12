<?php
/* Basic WordPress supports */
function twist_theme_supports() {
  $supports = array(
    'post-thumbnails',
    'custom-header',
    'automatic-feed-links',
    'html5',
    'title-tag');
  foreach ( $supports as $s ) {
    add_theme_support( $s );
  }
}
add_action( 'after_setup_theme', 'twist_theme_supports' );

register_nav_menus( array(
  'primary_menu' => 'Primary Menu',
  'footer_menu' => 'Footer Menu'
) );

/* Include required classes */
require_once('inc/class.wrapper.php');
