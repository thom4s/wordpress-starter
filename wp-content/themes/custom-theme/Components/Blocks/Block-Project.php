
<article class="block-project">
        <a 
            href="<?php the_permalink(); ?>" 
            data-slug="<?php echo get_post_field( 'post_name', get_post() );?>"
            data-type="<?php echo get_post_type(); ?>"
            class="block-project__link -block">
        </a>

        <div class="block-project__image mb-m">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
            <?php else: ?>
                <div class="block_placeholder"></div>
            <?php endif; ?>
        </div>

        <div class="">
            <h3 class="h3 mb-xxs"><?php the_title(); ?></h3>
            <div class="flex gap-xxs wrap">
                <?php 
                $project_categories = get_the_terms(get_the_ID(), 'category');

                if ($project_categories && !is_wp_error($project_categories)) : ?>
                    <div class="block-post__categories">
                        <?= implode(', ', array_map(function($category) {
                            return '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
                        }, $project_categories)); ?>
                    </div>
                <?php endif; ?>


                
                <?php if (get_the_tag_list('', ', ')) : ?>
                    <div class="block-post__tags">
                        <?= get_the_tag_list('', ', '); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</article>
