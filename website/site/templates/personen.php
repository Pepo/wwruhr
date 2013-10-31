<?php snippet('header') ?>
                <h3>Beteiligte Personen</h3>

                <?php
                    $personen = $pages->find('personen')->children()->shuffle();

                ?>
                <?php foreach($personen as $person): ?>
                    <div class="event clearfix">
                        <h4><?php print $person->name() ?></h4>


                        <?php $image =  $person->images()->first() ?>
                        <?php echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <ul class="kontakte clearfix">
                            <li><?php echo twitter($person->twitter()) ?></li>
                            <li><a href="<?php echo $person->homepage()?>"><?php echo $person->homepage()?></a></li>
                        </ul>
                        <ul class="tags">
                            <?php if($person->tag1()):?>
                                <li><?php echo $person->tag1(); ?></li>
                            <?php endif; ?>
                            <?php if($person->tag2()):?>
                                <li><?php echo $person->tag2(); ?></li>
                            <?php endif; ?>
                            <?php if($person->tag3()):?>
                                <li><?php echo $person->tag3(); ?></li>
                            <?php endif; ?>
                            <?php if($person->tag4()):?>
                                <li><?php echo $person->tag4(); ?></li>
                            <?php endif; ?>
                            <?php if($person->tag5()):?>
                                <li><?php echo $person->tag5(); ?></li>
                            <?php endif; ?>
                            <?php if($person->tag6()):?>
                                <li><?php echo $person->tag6(); ?></li>
                            <?php endif; ?>
                            <?php if($person->tag7()):?>
                                <li><?php echo $person->tag7(); ?></li>
                            <?php endif; ?>

                        </ul>
                        <p><a href="<?php echo $person->url() ?>">Details »</a></p>

                    </div>
                <?php endforeach; ?>

<?php snippet('footer') ?>
