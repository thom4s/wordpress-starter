<?php
    $title = $args['title'];
    $visuals = $args['visuals'];
    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
?>

<section class="mod_visual-grid">

    <?php if( $title ): ?>
        <h2 class="mod_title"><?= $title; ?></h2>
    <?php endif; ?>

    <?php if( $visuals ): ?>
        <div class="visual-grid">
            <?php foreach( $visuals as $visual ) : ?> 
                <div class="img-container">
                    <img src="<?= $visual["url"] ?>" alt="<?= $visual["alt"] ?>">   
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>