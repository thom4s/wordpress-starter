<?php
$visuel = $args['visuel'];
$txt = $args['txt'];

?>


<section class="mod_visuel-text entry-header wrapper">

    <div class="grid gap-xl">
        <figure class="mod_cover s-6col">
            <img src="<?php echo $visuel; ?>">
        </figure>
        
        <div class="mod_content s-6col flex -center-y">
            <div class="body-title">
                <?php echo $txt; ?>
            </div>
        </div>
    </div>

</section>