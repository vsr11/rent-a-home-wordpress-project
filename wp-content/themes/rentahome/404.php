<?php
/**
 * Some stuff
 *
 * @package rentahome
 */


get_header();
?>

<div class="err-img">
	<img src="<?php echo get_template_directory_uri(); ?>/images/404-error-page-not-found.jpg" alt="not found"
		style="width: 400px;">

</div>
<div>
	<?php get_search_form(); ?>
</div>

<?php get_footer();
