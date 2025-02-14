<?php
    $title = $args['title'];
    $accordeons = $args['accordeons'];
?>

<section class="mod_accordeons wrapper small">
    <?php if( $title ): ?>
        <h2 class="mb-m"><?= $title; ?></h2>
    <?php endif; ?>
    
    <?php if($accordeons) : ?>
        <div class="accordeons flex -column gap-m">
            <?php foreach( $accordeons as $index => $accordeon ): ?>
                <label class="accordeon" for="checkbox_<?= $index; ?>">
                    <input type="checkbox" id="checkbox_<?= $index; ?>" name="checkbox_<?= $index; ?>" class="accordeon__input">
                    <div class="flex -space -center-y">
                        <h3 class="accordeon__title"><?= $accordeon['mod_title']; ?></h3>
                        <div class="accordeon__icon"><?php get_template_part('Components/Svgs/Svg', 'ChevronRight'); ?></div>    
                    </div>

                    <div class="accordeon__content">
                        <div class="overflow-hidden">
                            <p><?= $accordeon['mod_content']; ?></p>
                            <p><?= $accordeon['mod_content']; ?></p>
                            <p><?= $accordeon['mod_content']; ?></p>
                        </div>
                    </div>
                </label>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>