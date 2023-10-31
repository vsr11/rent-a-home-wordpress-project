<?php

add_theme_support( 'post-thumbnails' );
add_image_size( 'rentahome-thumbnail', 100, 100 );

function exam_assets() {

	wp_enqueue_style( 'exam', get_stylesheet_directory_uri() . '/css/master.css', array(), filemtime( get_template_directory() . '/css/master.css' ) );
	wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', array(), 1.0 );

}
add_action( 'wp_enqueue_scripts', 'exam_assets' );



function mymenu_register_nav_menus() {
	register_nav_menus(
		array(
			'header_menu' => __( 'Header Menu', 'rentahome' ),
			'footer_menu' => __( 'Footer Menu', 'rentahome' ),
			'header_menu_post' => __( 'Header Menu Post', 'rentahome' ),
		)
	);
}

add_action( 'after_setup_theme', 'mymenu_register_nav_menus' );
