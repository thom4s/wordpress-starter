<?php get_header(); ?>

    <main id="main" class="front-page wrapper" role="main">

        <h2>Module Quote</h2>
        <?php get_template_part( 'Components/Modules/Module', 'Quote', array('content' => "Lorem ipsum indolor") ); ?>

        <h2>Module Carousel</h2>
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
            );
            $posts = get_posts($args);
            get_template_part( 'Components/Modules/Module', 'Carousel', array('posts' => $posts) ); 
        ?>

        <h2>Module News</h2>
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
            );
            $news_post = get_posts($args)[0];
            get_template_part('Components/Modules/Module', 'News', array('post' => $news_post)); 
        ?>
        

    </main>

<?php get_footer(); ?>