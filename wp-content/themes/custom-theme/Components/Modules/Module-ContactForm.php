<?php
    $title = $args['title'];
    $form_id = $args['form_id'];
?>

<section class="mod_contact-form wrapper">
    <?php if( $title ): ?>
        <h2 class="mb-m"><?php echo $title; ?></h2>
    <?php endif; ?>

    <?php echo do_shortcode('[contact-form-7 id="' . esc_attr($form_id) . '"]'); ?>
</section>