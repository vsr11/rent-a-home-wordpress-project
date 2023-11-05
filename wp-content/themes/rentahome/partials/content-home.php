<li class="property-card">
	<div class="property-primary">
		<h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="property-meta">
			<span class="meta-location">
				<?php echo rentahome_display_terms( get_the_ID(), 'location' ); ?>
			</span>
			<span class="meta-total-area">Total area:
				<?php echo rentahome_display_terms( get_the_ID(), 'area' ); ?>sq.m
			</span>
		</div>
		<div class="property-details">
			<span class="property-price">€
				<?php echo rentahome_display_terms( get_the_ID(), 'price' ); ?>
			</span>
			<span class="property-date">Posted
				<?php the_time(); ?>
			</span>
		</div>
	</div>
	<div class="property-image">
		<div class="property-image-box">
			<?php if ( has_post_thumbnail() ) : ?>
				<img src="<?php the_post_thumbnail(); ?>" alt="property image">
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/bedroom.jpg" alt="property image">
			<?php endif; ?>
		</div>
	</div>
</li>
