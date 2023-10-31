<?php
/**
 * Home taxonomy class for Rentahome plugin
 *
 * @package Job
 */
class Home_Taxonomies {
	/**
	 * Private function to load stuff
	 *
	 * @package rentahome
	 */
	private $type = array();


	/**
	 * Load home taxonomy
	 *
	 * @package rentahome
	 */
	public function __construct( $type ) {
		$this->type = $type;
		add_action( 'init', array( $this, 'init_home_taxonomies' ) );
	}


	/**
	 * Setup taxonomy
	 *
	 * @package rentahome
	 */
	public function init_home_taxonomies() {

		$labels = array(
			'name' => _x( 'Locations', 'taxonomy general name', 'rentahome' ),
			'singular_name' => _x( 'Location', 'taxonomy singular name', 'rentahome' ),
			'search_items' => __( 'Search Companies', 'rentahome' ),
			'all_items' => __( 'All Companies', 'rentahome' ),
			'parent_item' => __( 'Parent Location', 'rentahome' ),
			'parent_item_colon' => __( 'Parent Location:', 'rentahome' ),
			'edit_item' => __( 'Edit Location', 'rentahome' ),
			'update_item' => __( 'Update Location', 'rentahome' ),
			'add_new_item' => __( 'Add New Location', 'rentahome' ),
			'new_item_name' => __( 'New Location Name', 'rentahome' ),
			'menu_name' => __( 'Location', 'rentahome' ),
		);

		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'location' ),
		);

		register_taxonomy( 'location', $this->type, $args );

		unset( $labels );
		unset( $args );

		$labels = array(
			'name' => _x( 'Areas', 'taxonomy general name', 'rentahome' ),
			'singular_name' => _x( 'Area', 'taxonomy singular name', 'rentahome' ),
			'search_items' => __( 'Search Companies', 'rentahome' ),
			'all_items' => __( 'All Companies', 'rentahome' ),
			'parent_item' => __( 'Parent Area', 'rentahome' ),
			'parent_item_colon' => __( 'Parent Area:', 'rentahome' ),
			'edit_item' => __( 'Edit Area', 'rentahome' ),
			'update_item' => __( 'Update Area', 'rentahome' ),
			'add_new_item' => __( 'Add New Area', 'rentahome' ),
			'new_item_name' => __( 'New Area Name', 'rentahome' ),
			'menu_name' => __( 'Area', 'rentahome' ),
		);

		$args = array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'area' ),
		);

		register_taxonomy( 'area', $this->type, $args );

		unset( $labels );
		unset( $args );

		$labels = array(
			'name' => _x( 'Prices', 'taxonomy general name', 'rentahome' ),
			'singular_name' => _x( 'Price', 'taxonomy singular name', 'rentahome' ),
			'search_items' => __( 'Search Companies', 'rentahome' ),
			'all_items' => __( 'All Companies', 'rentahome' ),
			'parent_item' => __( 'Parent Price', 'rentahome' ),
			'parent_item_colon' => __( 'Parent Price:', 'rentahome' ),
			'edit_item' => __( 'Edit Price', 'rentahome' ),
			'update_item' => __( 'Update Price', 'rentahome' ),
			'add_new_item' => __( 'Add New Price', 'rentahome' ),
			'new_item_name' => __( 'New Price Name', 'rentahome' ),
			'menu_name' => __( 'Price', 'rentahome' ),
		);

		$args = array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'price' ),
		);

		register_taxonomy( 'price', $this->type, $args );



	}

}
