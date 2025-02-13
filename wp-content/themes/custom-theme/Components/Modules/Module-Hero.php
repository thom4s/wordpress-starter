<?php
$visuel = $args['bg'];
$tittle = $args['title'];
$txt = $args['txt'];

?>


<section class="mod_hero entry-header ">

    <div class="hero is-relative">
        <figure class="hero__image s-6col">
            <img src="<?= $visuel; ?>">
        </figure>
        
        <div class="hero__content s-6col flex -center">
            <h1 class="txt-center"><?= $tittle; ?></h1>
            <p class="txt-center"><?= $txt; ?></p> 
        </div>
    </div>

</section>