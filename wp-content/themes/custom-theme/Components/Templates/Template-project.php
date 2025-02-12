<?php
/**
 * Template part for displaying project
 *
 * @package rubismecenat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="project-header is-relative wrapper small">

        <div class="breadcrumb_container t-12col">
            <?php get_template_part('Components/Modules/Module', "Breadcrumbs"); ?>
        </div>

        <div class="project-header-container is-relative">

            <!-- <div class="project_cover t-12col">
                <?php the_post_thumbnail( get_the_ID(), 'theme_large' ); ?>
            </div> -->

            <div class="project_titles">
                <h1 class="entry-title txt-center mt-xxl mb-xxl"><?php the_title(); ?></h1>
            </div>

        </div>

	</header><!-- .entry-header -->


	<div class="wrapper small entry-content mt-l mb-xxl">

        <div class="body">
            <?php the_content(); ?>
        </div>  

	</div><!-- .entry-content -->    

</article><!-- #post-<?php the_ID(); ?> -->