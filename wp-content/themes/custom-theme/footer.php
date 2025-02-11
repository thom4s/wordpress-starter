<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="wrapper">
			<div class="flex -space mb-l">
				<?php
				$logo = get_field('logo_du_site', 'option'); 
				if( $logo ): ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
						<img src="<?php echo esc_url( $logo ); ?>" alt="Logo">
					</a>
				<?php endif; ?>

				<nav id="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu-fr', 'menu_id' => 'footer-menu', 'container' => false ) ); ?>
				</nav>

				<nav id="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-fr', 'menu_id' => 'footer-menu', 'container' => false ) ); ?>
				</nav>
			</div>

			<p id="copyright" class="txt-center">Copyright © <?= date("Y"); ?> <?= bloginfo('name'); ?></p>


			<div id="wp-footer">
				<?php wp_footer(); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
