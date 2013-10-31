  </article>
            <aside>
                <h2>Location</h2>
                <p>Wir treffen uns im Unperfekthaus in Essen</p>
                <iframe width='319' height='319' frameBorder='0' src='http://a.tiles.mapbox.com/v3/derpepo.map-1c7zpsc7.html#16/51.45872669642711/7.007458806037903'></iframe>
                <p>Haltestelle: Berliner Platz</p>
                <ul>
                    <li>U11, U17 und U18 (U-Bahn)</li>
                    <li>101, 103, 105 und 109 (Tram)</li>
                    <li>145, 147, 166 und SB16 (Bus)</li>
                    <li>NE10, NE11, NE12 und NE16 (Nachtexpress)</li>
                </ul>
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
            </li>
            <?php
                endforeach;
            ?>
        </ul>
    </footer>

</body>
</html>
