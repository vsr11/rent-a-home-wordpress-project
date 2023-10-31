<?php
// Template Name: Homepage
get_header();
?>

<?php
$query = new WP_Query( array(
	'post_type' => 'home',
) );
if ( $query->have_posts() ) :
	?>
	<ul class="properties-listing">
		<?php
		while ( $query->have_posts() ) :
			$query->the_post();
			?>
			<?php
			get_template_part( 'partials/content', 'home' );
			?>
		<?php endwhile; ?>
		<?php
endif;
?>
</ul>

<?php
get_footer();
