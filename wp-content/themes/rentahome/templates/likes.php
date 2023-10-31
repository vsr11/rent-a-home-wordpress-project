<?php get_header() ?>

<?php
/**
 * Template Name: Likes property
 */


$user_id = get_current_user_id();


$applay_list = get_user_meta( $user_id, 'list', true );
?>
<!-- <h1>Беленик на
	<?php echo wp_get_current_user()->display_name ?>
</h1> -->


<?php

$args      = array(
	'post_type' => 'home',
	'key' => 'list',
	'value' => $applay_list,
);
$the_query = new WP_Query( $args );


// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		if ( in_array( get_the_ID(), $applay_list ) ) {

			get_template_part( 'partials/content', 'home' );
		}
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
<?php get_footer(); ?>
