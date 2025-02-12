<?php get_header(); ?>

    <main id="main" class="front-page wrapper" role="main">

        <section class="home">
            <h2>Module Quote</h2>
            <?php get_template_part( 'Components/Modules/Module', 'Quote', array('content' => "Lorem ipsum indolor") ); ?>
        </section>

        <section class="home">
            <h2>Module Carousel</h2>
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );
                $posts = get_posts($args);
                get_template_part( 'Components/Modules/Module', 'Carousel', array('posts' => $posts) ); 
            ?>
        </section>

        <section class="home">
            <h2>Module News</h2>
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );
                $news_post = get_posts($args)[0];
                get_template_part('Components/Modules/Module', 'News', array('post' => $news_post)); 
            ?>
        </section>

        <section class="home">
            <h2 class="mb-l">Module VisuelTexte</h2>
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );
                $post = get_posts($args)[0]; 
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];

                get_template_part( 'Components/Modules/Module', 'VisuelText', array('txt' => "Lorem ipsum", 'visuel' => $thumbnail_url  ) );
            ?>
        </section>
        
        <section class="home">
            <h2>Module Contacts</h2>
            <?php 
                $contacts = array(
                    array(
                        'contact_name' => 'John Doe',
                        'contact_fonction' => 'CEO',
                        'contact_details' => 'John is the CEO of the company.',
                        'contact_tel' => '06 00 00 00 00',
                        'contact_email' => 'john.doe@example.com',
                        'contact_linkedIn' => 'linkedin.com/in/johndoe'
                    ),
                    array(
                        'contact_name' => 'Jane Smith',
                        'contact_fonction' => 'CTO',
                        'contact_details' => 'Jane is the CTO of the company.',
                        'contact_tel' => '06 00 00 00 01',
                        'contact_email' => 'jane.smith@example.com',
                        'contact_linkedIn' => 'linkedin.com/in/janesmith'
                    )
                );
                get_template_part( 'Components/Modules/Module', 'Contacts', array('contacts' => $contacts) ); 
            ?>
        </section>

        <section class="home">
            <h2>Module VisualGrid</h2>
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );
                    $posts = get_posts($args);
                    $visuals = array();
                    foreach ($posts as $post) {
                        $visuals[] = array(
                            'ID' => $post->ID,
                            'thumbnail_id' => get_post_thumbnail_id($post->ID)
                        );
                    }
                get_template_part( 'Components/Modules/Module', 'VisualGrid', array('visuals' => $visuals) ); 
            ?>
        </section>

    </main>

<?php get_footer(); ?>