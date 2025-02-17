<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package custom-theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header -simple txt-center mb-xxl">
			<div class="wrapper">
				<div class="header-titles m-8col -centered">
					<h1 class="entry-title mb-m"><?php the_title(); ?></h1>
					<div class="body-title"><?php the_excerpt(); ?></div>
				</div>
			</div>
		</header><!-- .entry-header -->

		<div class="breadcrumb_container t-12col wrapper">
			<?php get_template_part('Components/Modules/Module', "Breadcrumbs"); ?>
		</div>

		<?php if( get_the_content() !== '' ) : ?>
			<div class="entry-content wrapper mb-xxl">

				<?php the_content(); ?>

			</div><!-- .entry-content -->
		<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
