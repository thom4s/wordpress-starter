<?php 
/**
 * Template Name: Archives Projets
 *
 * @package custom-theme
 */

get_header(); ?>

<main id="main" class="archive-main" role="main">
    <div class="wrapper">
        <h1 class="mb-xl txt-center">Nos Projets</h1>

        <?php
        $args = array(
            'post_type'      => 'project',
            'posts_per_page' => 10,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
        );

        $projets_query = new WP_Query($args);

        if ($projets_query->have_posts()) : ?>
            <div class="grid">
                <?php while ($projets_query->have_posts()) : $projets_query->the_post(); ?>
					<div class="s-3col">
						<?php get_template_part('Components/Blocks/Block', 'project'); ?>
					</div>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php 
					echo paginate_links(array(
						'total' => $projets_query->max_num_pages,
						'current' => max(1, get_query_var('paged')),
						'prev_text' => __('« Précédent', 'custom-theme'),
						'next_text' => __('Suivant »', 'custom-theme'),
					)); 
                ?>
            </div>

        <?php else : ?>
            <p>Aucun projet trouvé.</p>
        <?php 
			endif;
        	wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer(); ?>