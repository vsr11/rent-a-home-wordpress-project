<?php
/**
 * Rent a home custom type
 *
 * @package rentahome
 */
class Home_Type {

	public function __construct() {
		add_action( 'init', array( $this, 'register_type' ) );
	}

	/**
	 * @package rentahome
	 * @since 1.0.0
	 *
	 */
	public function register_type() {
		$labels = array(
			'name' => _x( 'Homes', 'Post type general name', 'rentahome' ),
			'singular_name' => _x( 'Home', 'Post type singular name', 'rentahome' ),
			'menu_name' => _x( 'Homes', 'Admin Menu text', 'rentahome' ),
			'name_admin_bar' => _x( 'Home', 'Add New on Toolbar', 'rentahome' ),
			'add_new' => __( 'Add New', 'rentahome' ),
			'add_new_item' => __( 'Add New Home', 'rentahome' ),
			'new_item' => __( 'New Home', 'rentahome' ),
			'edit_item' => __( 'Edit Home', 'rentahome' ),
			'view_item' => __( 'View Home', 'rentahome' ),
			'all_items' => __( 'All Homes', 'rentahome' ),
			'search_items' => __( 'Search Homes', 'rentahome' ),
			'parent_item_colon' => __( 'Parent Homes:', 'rentahome' ),

		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'home' ),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
		);

		register_post_type( 'home', $args );
		flush_rewrite_rules();
	}
/**
 * Init func
 */


}
