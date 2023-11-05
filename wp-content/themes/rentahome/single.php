<?php get_header(); ?>

<?php
$list = get_user_meta( get_current_user_id(), 'list', true );

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		$tid = get_the_ID();
		?>

		<div class="property-single">
			<main class="property-main">
				<div class="property-card">
					<div class="property-primary">
						<header class="property-header">
							<h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="property-meta">
								<span class="meta-location">Ovcha Kupel, Sofia</span>
								<span class="meta-total-area">Price: 1,100 €/sq.m</span>
							</div>

							<div class="property-details grid">
								<div class="property-details-card">
									<div class="property-details-card-title">
										<h3>Rooms</h3>
									</div>
									<div class="property-details-card-body">
										<ul>
											<li>2 Bedrooms</li>
											<li>1 Bathroom</li>
											<li>1 Living room</li>
											<li>Separated kitchen</li>
										</ul>
									</div>
								</div>
								<div class="property-details-card">
									<div class="property-details-card-title">
										<h3>Additional Details</h3>
									</div>
									<div class="property-details-card-body">
										<ul>
											<li>Floor: 6</li>
											<li>Elevator/Lift</li>
											<li>Brick-built</li>
											<li>Electricity</li>
											<li>Water Supply</li>
											<li>Heating</li>
										</ul>
									</div>
								</div>
							</div>

						</header>

						<div class="property-body">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</main>
			<aside class="property-secondary">
				<div class="property-image property-image-single">
					<div class="property-image-box property-image-box-single">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail(); ?>" alt="property image">
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/bedroom.jpg" alt="property image">
						<?php endif; ?>
					</div>
				</div>
				<div>
					Vists:
					<?php echo rentahome_show_visits( $tid ); ?>
				</div>

				<?php
				if ( in_array( $tid, $list ) ) {
					echo '<div class="dis button button-wide like">Already applied</div>';
				} else {
					?>
					<a href="#" class="button button-wide like" data-post-id="<?php echo $tid; ?>"
						data-user-id="<?php echo get_current_user_id(); ?>">Like the
						property</a>
					<?php
				}
				?>
			</aside>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<h2 class="section-heading">Other similar properties from
	<?php echo get_user_by( 'id', get_current_user_id() )->display_name; ?>:
</h2>
<?php
$author = ( get_query_var( 'author' ) ) ? get_query_var( 'author' ) : get_current_user_id();

$q = new WP_Query( array( 'post_status' => 'publish', 'post_type' => 'home', 'author' => $author, 'posts_per_page' => 2, 'post__not_in' => array( get_the_ID() ) ) );

get_header();

if ( $q->have_posts() ) :
	while ( $q->have_posts() ) :
		$q->the_post();
		get_template_part( 'partials/content', 'home' );
	endwhile;
endif;
; ?>

<?php
get_footer();
rentahome_update_visit( $tid );
?>
