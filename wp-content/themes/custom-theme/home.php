<?php get_header(); ?>

<main id="main" class="archive-main" role="main">
	<div class="wrapper">
		<h1 class="mb-xl txt-center">Nos Actualités</h1>

        <?php if (have_posts()) : ?>
            <div class="grid gap-m">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="s-4col">
                        <?php get_template_part('Components/Blocks/Block', 'Post'); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
				<?php 
					echo paginate_links(array(
						'total' => $wp_query->max_num_pages,
						'current' => max(1, get_query_var('paged')),
						'prev_text' => __('«', 'custom-theme'),
						'next_text' => __('»', 'custom-theme'),
					)); 
				?>
			</div>


        <?php else : ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>
	</div>
</main>
 
<?php get_footer(); ?>