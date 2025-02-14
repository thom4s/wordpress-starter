<?php
    $title = $args['title'];
    $video = $args['video'];
?>

<section class="mod_video wrapper">

    <?php if( $title ): ?>
        <h2 class="mb-m"><?php echo $title; ?></h2>
    <?php endif; ?>

    <video controls autoplay loop muted style="width: 100%;">
        <source src="<?php echo $video; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>