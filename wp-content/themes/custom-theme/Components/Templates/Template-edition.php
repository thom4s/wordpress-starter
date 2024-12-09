<?php
/**
 * Template part for displaying project
 *
 * @package custom-theme
 */

 $artist = get_field('edition_artist');


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="breadcrumb_container -editions wrapper">
        <?php get_template_part('Components/Modules/Module', "Breadcrumbs"); ?>
    </div>

    <div class="grid wrapper mt-xxl mb-xxl">

        <div class="entry-header s-5col">
        <?php if( get_field('edition_file') ) : ?>
                <iframe class="" src="<?php echo get_field('edition_file')["url"]; ?>"></iframe>

            <?php else : ?>
                <?php the_post_thumbnail('large'); ?>
                
            <?php endif; ?>
        </div><!-- .entry-header -->

    
        <div class="s-1col"></div>

        <div class="s-6col entry-content">
            <div class="m-6col">
                <h1 class="entry-title h2 -other mb-s"><?php the_title(); ?></h1>
                <h2 class="h2 mb-s"><?php echo $artist ? $artist->post_title : '' ?></h2>
            </div>

            <div class="m-6col body">
                <?php the_content(); ?>

                <div class="mt-xl">
                <?php if( get_field('edition_file') ) : ?>
                    <a href="<?php echo get_field('edition_file')["url"]; ?>" target="_blank" class="flex gap-s -center-y mb-m btn -filled-picto">
                        <p class="picto">
                            <?php get_template_part('Components/Svgs/Svg',  'Download'); ?>
                        </p>
                        
                        <p class="label flex -column">
                            <span class="body -bold"><?php pll_e('Récupérér le fichier'); ?></span>
                            <span class="body -light"><?php echo get_field('edition_file')["filesize"]; ?></span>
                        </p>
                    </a>
                <?php endif; ?>

                <?php if( get_field('edition_link') ) : ?>
                    <a href="<?php echo get_field('edition_link')["url"]; ?>" target="_blank" class="flex gap-s -center-y btn -filled-picto">
                        <p class="picto">
                            <?php get_template_part('Components/Svgs/Svg',  'Link'); ?>
                        </p>

                        <p class="label flex -column">
                            <span class="body -bold"><?php pll_e('Voir le site de l\'éditeur'); ?></span>
                        </p>
                    </a>
                <?php endif; ?>
                </div>
            </div>

        </div><!-- .entry-content -->

        <div class="s-1col"></div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->


<?php get_template_part('Components/Modules/Module', 'Artist', array( 'artist' => get_field('edition_artist'),  'bg' =>  false )); ?>

