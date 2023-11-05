<li class="property-card">
	<div class="property-image">
		<div class="property-image-box">
			<?php if ( has_post_thumbnail() ) : ?>
				<img src="<?php the_post_thumbnail(); ?>" alt="property image">
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/bedroom.jpg" alt="property image">
			<?php endif; ?>
		</div>
		<div class="property-primary">
			<h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		</div>

	</div>
</li>
