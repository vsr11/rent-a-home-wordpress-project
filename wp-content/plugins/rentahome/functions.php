<?php

function rent_time_ago() {
	return sprintf( esc_html__( '%s ago', 'rentahome' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter( 'the_time', 'rent_time_ago' );

function rentahome_display_terms( $id, $tax ) {

	if ( ! empty( $id ) && ! empty( $tax ) ) {
		$terms = get_the_terms( $id, $tax );
		if ( is_array( $terms ) ) {
			$term_item = wp_list_pluck( $terms, 'name' );
			$rezult    = join( ', ', $term_item );
			return $rezult;
		}
	}
}

function rentahome_update_visit( $post_id ) {
	$visit = get_post_meta( $post_id, 'visits', true );
	if ( empty( $visit ) ) {
		$visit = 1;
	} else {
		++$visit;
	}
	update_post_meta( $post_id, 'visits', $visit );
}

function rentahome_show_visits( $post_id ) {
	$v = get_post_meta( $post_id, 'visits', true );
	return ( empty( $v ) ) ? 0 : $v;
}
function property_details_shortcode( $id = '' ) {
	if ( empty( $id ) ) {
		$id = get_the_ID();
	}
	$q = get_post( $id );
	return $q->post_name . get_the_post_thumbnail( $id ) . $q->guid;
}

add_shortcode( 'property_details', 'property_details_shortcode' );

function my_enqueue() {
	wp_enqueue_script( 'my_utils', plugins_url( '/scripts/utils.js', __FILE__ ), array( 'jquery' ), 1.1 );
	wp_localize_script( 'my_utils', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );

// add_action( 'wp_ajax_nopriv_rentahome_like_property', 'rentahome_like_property' );
// add_action( 'wp_ajax_rentahome_like_property', 'rentahome_like_property' );



function rentahome_like_property() {


	$user_id = esc_attr( $_POST['user_id'] );
	$post_id = esc_attr( $_POST['post_id'] );
	// $arr = [];

	$arr = get_user_meta( $user_id, 'list', true );
	if ( empty( $arr ) ) {
		$arr = [];
	}

	array_push( $arr, $post_id );

	update_user_meta( $user_id, 'list', $arr );
	// $apllay_arr = get_user_meta($user_id, 'list');
	//    return $apllay_arr

	// if ($apllay_arr) {
	//     update_user_meta($user_id, 'list', 2);
	// } else {
	//     update_user_meta($user_id, 'list', 1);
	// }

}

add_action( 'wp_ajax_nopriv_rentahome_like_property', 'rentahome_like_property' );
add_action( 'wp_ajax_rentahome_like_property', 'rentahome_like_property' );

function dysplay_apply() {
	$user_id     = get_current_user_id();
	$applay_list = get_user_meta( $user_id, 'list', true );
	foreach ( $applay_list as $job ) {
		echo ( $job . '  ,  ' );
	}

}
