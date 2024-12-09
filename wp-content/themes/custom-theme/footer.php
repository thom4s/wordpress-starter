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
		<p id="copyright">Copyright © <?= date("Y"); ?> <?= bloginfo('name'); ?></p>

		<nav id="footer-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'container' => false ) ); ?>
		</nav>

		<div id="wp-footer">
			<?php wp_footer(); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
