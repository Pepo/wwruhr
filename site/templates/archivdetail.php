<?php snippet('header') ?>
            <div class="full-event">
                <h2><?= $page->h1() ?></h2>
                <?php $image = $page->images()->first(); ?>
                <? echo thumb( $image, array('width' => 250) ); ?>
                <h3><?= $page->datum() ?></h3>
                <span class="intro"><?= kirbytext($page->shorttext()) ?></span>
                <?= kirbytext($page->longtext()) ?>
                <?
                if($page->hasPrev($sort='title', $direction='asc') === true){ ?>
                <a href="<? echo $page->prev($sort='title', $direction='asc')->url()?>">Vorheriger Termin</a>
                <?}
                if($page->hasNext($sort='title', $direction='asc') === true){ ?>
                <a href="<? echo $page->next($sort='title', $direction='asc')->url()?>">Nächster Termin</a>
                <?}?>
            </div>    
<?php snippet('footer') ?>
