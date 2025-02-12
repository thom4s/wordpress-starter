<?php
    $publication = $args['post'];
?>


<section class="mod_news">

    <header class="mod_header wrapper">
        <h2 class="h2 txt-center mb-xxl"><?php echo $title; ?></h2>
    </header>

    <div class="mod_publication wrapper">
        <?php if( $publication ): ?>
            <article class="">
                <div class="-block" href="<?php echo get_permalink($publication->ID); ?>">
                
                    <div class="grid">
                        <div class="s-5col">

                            <header class="mb-l">
                                <h2 class="h2 mb-xxs"><?php  echo $publication->post_title; ?></h2>    
                            </header>

                            <div class="body mb-l">
                                <?= the_excerpt($publication->ID); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn -primary">Lire la suite</a>

                        </div>
                        <div class="s-1col"></div>
                        <div class="s-6col">
                            <?php the_post_thumbnail( $publication->ID, 'full' ); ?>
                        </div>
                    </div>
                </div>

            </article>
        <?php endif; ?>

    </div>

</section>