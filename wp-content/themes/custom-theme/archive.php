<?php
/**
 * Template Name: Archives Actualités
 *
 * @package custom-theme
 */

get_header(); ?>
<main id="main" class="archive-main" role="main">
	<div class="wrapper">
		<h1 class="mb-xl txt-center">Nos Actualités</h1>

		<?php
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => 10,
			'orderby'        => 'date',
			'order'          => 'DESC',
			'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
		);

		$post_query = new WP_Query($args);

		if ($post_query->have_posts()) : ?>
			<div class="grid gap-m">
				<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
					<div class="s-4col">
						<?php get_template_part('Components/Blocks/Block', 'post'); ?>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="pagination">
				<?php 
					echo paginate_links(array(
						'total' => $post_query->max_num_pages,
						'current' => max(1, get_query_var('paged')),
						'prev_text' => __('«', 'custom-theme'),
						'next_text' => __('»', 'custom-theme'),
					)); 
				?>
			</div>

		<?php else : ?>
			<p>Aucun article trouvé.</p>
		<?php 
			endif;
			wp_reset_postdata();
		?>
	</div>
</main>
 
<?php get_footer(); ?>