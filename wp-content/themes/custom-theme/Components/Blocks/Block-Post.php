
<article class="block-post">
    <a 
        href="<?php the_permalink(); ?>" 
        data-slug="<?= get_post_field( 'post_name', get_post() );?>"
        data-type="<?= get_post_type(); ?>"
        class="block-project__link -block">

        <div class="block-post__image mb-m">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
            <?php else: ?>
                <div class="block_placeholder"></div>
            <?php endif; ?>
        </div>
        <div class="">
            <?php if (get_the_title()) : ?>
            <h3 class="h3 mb-xxs"><?php the_title(); ?></h3>
            <?php endif; ?>
            
            <div class="flex gap-xxs wrap">
                <?php if (get_the_category_list(', ')) : ?>
                <div class="block-post__categories">
                    <?= get_the_category_list(', '); ?>
                </div>
                <?php endif; ?>
                
                <?php if (get_the_tag_list('', ', ')) : ?>
                <div class="block-post__tags">
                    <?= get_the_tag_list('', ', '); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </a>

</article>
