<?php snippet('header') ?>
                <h3>Beteiligte Personen</h3>

                <?
                    $personen = $pages->find('personen')->children()->shuffle();

                ?>
                <? foreach($personen as $person): ?>
                    <div class="event clearfix">
                        <h4><?= $person->name() ?></h4>


                        <? $image =  $person->images()->first() ?>
                        <? echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <ul class="kontakte clearfix">
                            <li><? echo twitter($person->twitter()) ?></li>
                            <li><a href="<?php echo $person->homepage()?>"><?php echo $person->homepage()?></a></li>
                        </ul>
                        <ul class="tags">
                            <? if($person->tag1()):?>
                                <li><?php echo $person->tag1(); ?></li>
                            <?php endif; ?>    
                            <? if($person->tag2()):?>
                                <li><?php echo $person->tag2(); ?></li>
                            <?php endif; ?>    
                            <? if($person->tag3()):?>
                                <li><?php echo $person->tag3(); ?></li>
                            <?php endif; ?>    
                            <? if($person->tag4()):?>
                                <li><?php echo $person->tag4(); ?></li>
                            <?php endif; ?>    
                            <? if($person->tag5()):?>
                                <li><?php echo $person->tag5(); ?></li>
                            <?php endif; ?>
                            <? if($person->tag6()):?>
                                <li><?php echo $person->tag6(); ?></li>
                            <?php endif; ?>    
                            <? if($person->tag7()):?>
                                <li><?php echo $person->tag7(); ?></li>
                            <?php endif; ?>    
    
                        </ul>
                        <p><a href="<?php echo $person->url() ?>">Details »</a></p>

                    </div>
                <? endforeach; ?>

<?php snippet('footer') ?>
