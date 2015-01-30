<?php snippet('header') ?>
                <?= kirbytext($page->text()) ?>

                <h3>Was bisher geschah</h3>

                <?php $archiv = $pages->find('archiv')->children()->flip(); ?>
                <?php foreach($archiv as $a): ?>
                    <div class="event clearfix">
                        <h4><?php print $a->h1(); ?> - <?= $a->datum(); ?></h4>
                        <?php $image = $a->images()->first(); ?>
                        <?php if ($image) { echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); } ?>
                        <p><?= kirbytext($a->shorttext()) ?></p>
                        <p><a href="<?php echo $a->url() ?>" class="right">Details</a></p>
                    </div>
                <?php endforeach; ?>
<?php snippet('footer') ?>
