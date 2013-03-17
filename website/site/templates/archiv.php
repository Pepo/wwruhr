<?php snippet('header') ?>
                <h2><?= $page->h1() ?></h2>
                <?= kirbytext($page->shorttext()) ?>
                <?= kirbytext($page->longtext()) ?>
<?php snippet('footer') ?>
