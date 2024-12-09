<?php
/**
 * Template part for displaying project
 *
 * @package custom-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="wrapper project-header is-relative">

        <div class="breadcrumb_container s-12col">
            <?php get_template_part('Components/Modules/Module', "Breadcrumbs"); ?>
        </div>


        <div class="project-header-container is-relative">

            <div class="project_cover s-12col">
                <?php rubismecenat_post_thumbnail( get_the_ID() ); ?>
            </div>

            <div class="project_content grid -end-y h-full is-absolute">

                <div class="project_titles m-5col -end flex -column -end-x">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <h2 class="h3 -other mb-s"><?php the_field('project_subtitle'); ?></h2>
                    <p class="body -big -light"><?php the_field('project_place'); ?></p>
                    <p><?php the_field('project_artiste'); ?></p>
                </div>

            </div>
        </div>

	</header><!-- .entry-header -->


	<div class="wrapper project-content grid mb-xxl">

        <div class="m-6col body">
            <?php the_content(); ?>
        </div>
        
        <div class="project-right m-5col -end">
            <div>
                <?php the_field('project_practical'); ?>
            </div>

            <?php $presskit = get_field('project_presskit');
                    if( $presskit ): ?>
                            <div class="project_presskit flex -column gap-m">
                                <a href="<?php echo $presskit['url']; ?>" target="_blank" class="flex gap-s -center-y btn -filled-picto">

                                    <p class="picto">
                                        <?php get_template_part('Components/Svgs/Svg',  'Download'); ?>
                                    </p>

                                    <p class="label flex -column">
                                        <span class="body -bold"><?php echo $presskit['title']; ?></span>
                                        <span class="body -light"><?php echo human_filesize($presskit['filesize'], 0); ?></span>
                                    </p>

                                </a>
                            </div>

                            
            <?php endif; ?>
            
        </div>       

	</div><!-- .entry-content -->    

</article><!-- #post-<?php the_ID(); ?> -->


<?php get_template_part('Components/Modules/Module', 'Artist', array( 'artist' => get_field('project_artists'), 'border' => true )); ?>
