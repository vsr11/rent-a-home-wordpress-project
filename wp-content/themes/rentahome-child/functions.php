<?php
function child_assets() {
	wp_enqueue_style( 'rentahome-child', get_stylesheet_directory_uri() . './css/master.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'child_assets' );
