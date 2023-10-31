<?php
/**
 * Some stuff
 * Template Name: My homs
 *
 * @package rentahome
 */

$q = new WP_Query( array( 'post_status' => 'publish', 'post_type' => 'home' ) );
get_header();
if ( $q->have_posts() ) :
	echo '<h1>All property offers from ';
	echo gmdate( 'Y' );
	echo '</h1>';
	while ( $q->have_posts() ) :
		$q->the_post();
		get_template_part( 'partials/content', 'home' );
	endwhile;
endif;
get_footer();
