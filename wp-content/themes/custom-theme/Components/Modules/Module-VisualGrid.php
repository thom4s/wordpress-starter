<?php
    $visuals = $args['visuals'];
    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
?>

<section class="mod_visual-grid">

    <?php if( $visuals ): ?>
        <div class="visual-grid">
            <?php foreach( $visuals as $visual ) : ?> 
                <div class="img-container">
                    <?= get_the_post_thumbnail($visual); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>