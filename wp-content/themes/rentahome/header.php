<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?php wp_title(); ?>
		</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">

		<link href="" rel="stylesheet">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div class="site-wrapper">
			<header class="site-header">
				<?php if ( is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo home_url(); ?>">Properties Offers</a></h1>
				<?php else : ?>
					<h2 class="site-title"><a href="<?php echo home_url(); ?>">Properties Offers</a></h2>
				<?php endif; ?>
			</header>
			<?php
			if ( has_nav_menu( 'header_menu' ) && ! is_single() ) {
				wp_nav_menu(
					array(
						'theme_location' => 'header_menu',
					)
				);
			}

			if ( has_nav_menu( 'header_menu_post' ) && is_single() ) {
				wp_nav_menu(
					array(
						'theme_location' => 'header_menu_post'
					)
				);
			}
			?>
