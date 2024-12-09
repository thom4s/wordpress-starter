<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package custom-theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<header class="entry-header txt-center mb-xxl">
			<div class="wrapper flex -center-x">
				<?php get_search_form(); ?>
			</div>
		</header><!-- .entry-header -->


		<div class="grid wrapper">
			<div class="m-4col">
				<?php list_post_type(); ?>
			</div>

			<div class="m-8col">

				<?php if ( have_posts() ) : ?>
					<div id="mainGrid" class="grid mb-l">
						
						<?php while ( have_posts()) : the_post(); ?>

							<div class="m-6col mb-xxl">
								<?php get_template_part( 'Components/Blocks/Block', ucfirst(get_post_type()) ); ?>
							</div>
							
						<?php endwhile; ?>

					</div>

					<div class="mb-xxl">
						<div id="search-pagination" class="pagination flex -center gap-s">
							<?php global $wp_query; pagination_bar($wp_query); ?>
						</div>

						<div id="search-loadmore" class="pagination flex -center hidden">
							<button class="btn"><?php pll_e('Charger plus de résultats'); ?></button>
						</div>
					</div>

				<?php else :

				get_template_part( 'Components/content', 'none' );

				endif; ?>
				
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();