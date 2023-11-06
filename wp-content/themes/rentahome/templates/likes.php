<?php
/**
 * Template Name: Likes property
 */

get_header();

$user_id    = get_current_user_id();
$apply_list = get_user_meta( $user_id, 'list', true );

echo wp_get_current_user()->display_name;

$args = array(
	'post_type' => 'home',
	'key'       => 'list',
	'value'     => $apply_list,
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		if ( in_array( get_the_ID(), $apply_list ) ) {
			get_template_part( 'partials/content', 'home' );
		}
	}
	echo '</ul>';
} else {
	// no posts found
}

wp_reset_postdata();

get_footer();
