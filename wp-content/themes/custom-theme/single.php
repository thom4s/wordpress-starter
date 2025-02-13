<?php
/**
 * The template for displaying all single Vidéo
 *
 * @package custom-theme
 */

get_header();
?>

	<main id="primary" class="site-main">
	
		<?php

		while ( have_posts() ) :
			the_post(); 
			$args = array();

			switch ( get_post_type() ) {

				case 'custom':
					$template = 'custom';
					break;

				default:
					$template =  get_post_type();
					break;
			}

			get_template_part( 'Components/Templates/Template', $template, $args );

			get_template_part('Components/content', 'module'); 

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
