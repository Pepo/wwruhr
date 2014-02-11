<?php snippet('header') ?>
                <?= kirbytext($page->text()) ?>

                <h3>Was bisher geschah</h3>

                <?
                    $archiv = $pages->find('archiv')->children()->flip();

                ?>
                <? foreach($archiv as $a): ?>
                    <div class="event clearfix">
                        <h4><?= $a->h1() ?></h4>


                        <? $image =  $a->images()->first() ?>
                        <? echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <p><?= $a->shorttext() ?></p>
                        <p><a href="<?php echo $a->url() ?>">Details</a></p>

                    </div>
                <? endforeach; ?>
<?php snippet('footer') ?>
