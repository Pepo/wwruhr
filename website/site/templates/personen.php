<?php snippet('header') ?>
                <h3>Beteiligte Personen</h3>

                <?php
                    $personen = $pages->find('personen')->children()->shuffle();

                ?>
                <?php foreach($personen as $person): ?>
                    <div class="person-overview clearfix">
                        <h4><?php print $person->name() ?></h4>


                        <?php $image =  $person->images()->first() ?>
                        <?php echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <ul class="kontakte clearfix">
                            <li><a href="http://www.twitter.com/<?php echo $person->twitter()?>">Twitter</a></li>
                            <li><a href="<?php echo $person->homepage()?>">Web</a></li>
                        </ul>


                    </div>
                <?php endforeach; ?>

<?php snippet('footer') ?>
