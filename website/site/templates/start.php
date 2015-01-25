<?php snippet('header') ?>
                <?php print kirbytext($page->text()) ?>

                <?php snippet('aktuell') ?>

                <h3>Was bisher geschah</h3>

                <?php
                    $archiv = $pages->find('archiv')->children()->flip()->limit(3);
                ?>

                <?php foreach($archiv as $a): ?>
                    <div class="event clearfix">
                        <h4>
                            <a href="<?php print $a->url() ?>"><?php print $a->h1() ?></a>
                        </h4>
                        <?php if($a->hasImages()): ?>
                            <?php echo thumb( $a->images()->first(), array('width' => 95, 'height' => 95) ); ?>
                        <?php endif; ?>

                        <p><?php print kirbytext($a->shorttext()) ?></p>
                        <p><a href="<?php echo $a->url() ?>">Details</a></p>

                    </div>
                <?php endforeach; ?>
<?php snippet('footer') ?>
