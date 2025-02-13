<?php
    $posts = $args['posts'];
    $title = isset( $args['title'] ) ? $args['title'] : '';
?>


<section class="mod_carousel swiper carousel wrapper  <?php echo $bg ? '-bg' : ''; ?>">

    <header class="mod_title mb-m flex -space -center-y mb-l ">
        <h2>
            <?php echo $title; ?>
        </h2>

        <div class="navigation flex gap-m -center-y">
            <div class="swiper-button prev btn -simple">
                <?php get_template_part('Components/Svgs/Svg', 'ArrowLeft'); ?>
            </div>
            <div class="swiper-button next btn -simple">
                <?php get_template_part('Components/Svgs/Svg', 'ArrowRight'); ?>
            </div>
        </div>
    </header>

    <?php if ($posts) : ?>

        <div class="swiper-wrapper">

            <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <div class="swiper-slide">
                    <?php get_template_part('Components/Blocks/Block', 'Post'); ?>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="swiper-pagination"></div>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


</section>