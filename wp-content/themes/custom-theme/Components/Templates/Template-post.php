<?php
/**
 * Template part for displaying project
 *
 * @package custom-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header wrapper flex -center mb-xl">
        <h1 class="entry-title txt-center"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content wrapper small">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

  

</article><!-- #post-<?php the_ID(); ?> -->