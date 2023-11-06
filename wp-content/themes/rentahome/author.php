<?php

$author = ( get_query_var( 'author' ) ) ? get_query_var( 'author' ) : get_current_user_id();
$q      = new WP_Query( array( 'post_status' => 'publish', 'post_type' => 'home', 'author' => $author ) );

get_header();

if ( $q->have_posts() ) :
	echo '<h1>All property offers from ';
	echo get_user_by( 'id', $author )->display_name;
	echo '</h1>';
	while ( $q->have_posts() ) :
		$q->the_post();
		get_template_part( 'partials/content', 'home' );
	endwhile;
endif;

get_footer();
