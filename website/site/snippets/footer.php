  </article>
            <aside>
                <h2>Location</h2>
                <p>Wir treffen uns im Unperfekthaus</p>
                <p>Karte</p>
                <p>Haltestelle</p>
            </aside>
        </section>
    </div>
    <footer class="clearfix">
        <h2>Gesichter und Hashtags</h2>
        <h3>Diese Menschen stehen für leidenschaftliche Webentwicklung</h3>
        <ul>
            <?php 
            $personen = $pages->find('personen')->children()->shuffle();
            foreach($personen as $person):
            $image = $person->files()->first();
            $bild = thumb($image, array('width' => 60, 'height' => 60, 'upscale' => false, 'crop' => true ));
            ?>
            <li class="karte">
                <h4><?php echo $person->name();?></h4>
                <?php echo $bild; ?>
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
            </li>
            <?php
                endforeach;
            ?>
        </ul>
    </footer>

</body>
</html>
