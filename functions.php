<?php
/*
====== Twist Theme Essentials ================================================
	Supports – add any and all add_theme_support values to the $supports array
	Menus – add any and all register_nav_menus values to the $menus array
*/
function twist_theme_supports() {
	$supports = array(
		'post-thumbnails',
		'custom-header',
		'automatic-feed-links',
		'html5',
		'title-tag',
	);
	foreach ( $supports as $s ) {
		add_theme_support( $s );
	}
}
add_action( 'after_setup_theme', 'twist_theme_supports' );

$menus = array(
	'primary_menu' => 'Primary Menu',
	'footer_menu' => 'Footer Menu',
);
register_nav_menus( $menus );

/*
====== Twist Widget Areas ================================================
*/

function twist_theme_widgets() {
	$sidebars = array();
	/*
	Create infinite customized sidebars
	Just add $sidebars[] = array( NEW ARGS HERE )
	*/
	$sidebars[] = array(
		'name'          => __( 'Footer', 'translation_string' ),
		'id'            => 'footer-widgets',
		'description'   => '',
	    'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="footer-widgets">',
		'after_title'   => '</h2>',
	);
	foreach ( $sidebars as $sidebar ) {
		register_sidebar( $sidebar );
	}
}
add_action( 'widgets_init', 'twist_theme_widgets' );

/*
====== Twist Theme Classes ====================================
	class.wrapper.php – Wrappers enables a DRY work environment
*/
require_once( 'inc/class.wrapper.php' );
