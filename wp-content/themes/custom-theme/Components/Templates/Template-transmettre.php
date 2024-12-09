<?php
/**
 * @package custom-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="wrapper gap-0 mb-0">
        <div class="breadcrumb_container s-12col">
            <?php get_template_part('Components/Modules/Module', "Breadcrumbs"); ?>
        </div>
	</header>
</article><!-- #post-<?php the_ID(); ?> -->
