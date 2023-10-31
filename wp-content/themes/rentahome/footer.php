<footer class="site-footer">

	<?php
	if ( has_nav_menu( 'footer_menu' ) && ! is_single() ) {
		wp_nav_menu(
			array(
				'theme_location' => 'footer_menu',
			)
		);
	}
	?>
	<p>&copy; Copyright
		<?php gmdate( 'Y' ); ?> | Developer links:
		<a href="/edits.php">Edits</a>,
		<a href="/index.php">Home</a>,
		<a href="/single.php">Single</a>
	</p>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
