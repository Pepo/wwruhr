<?php snippet('header') ?>
                <?php print kirbytext($page->text()) ?>

                <?php snippet('aktuell') ?>

                <h3>Was bisher geschah</h3>

                <?php
                    $archiv = $pages->find('archiv')->children()->flip()->limit(3);;
                ?>
                <?php foreach($archiv->flip() as $a): ?>
                    <div class="event clearfix">
                        <h4>
                            <a href="<?php print $a->url() ?>"><?php print $a->h1() ?></a>
                        </h4>


                        <?php $image =  $a->images()->first() ?>
                        <?php echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <p><?php print $a->shorttext() ?></p>
                        <p><a href="<?php echo $a->url() ?>">Details</a></p>

                    </div>
                <?php endforeach; ?>
<?php snippet('footer') ?>
