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
                <?php snippet('menu') ?>
            </aside>
        </section>
    </div>
    <footer class="clearfix">
        <h2>Willkommen im Ruhrgebiet,wo man Gesichter Fressen nennt! <span>(Frank Goosen)</span></h2>
        <h3>Diese Menschen sind Teil der <a href="www.meetup.com/wwruhr/">Meetup.com-Gruppe Webworker Ruhr</a></h3>
        <div class="ppl">
            <?php $json = json_decode(file_get_contents("https://api.meetup.com/2/members?group_id=17613862&key=484c52501a463038165f2827e1175")) ?>

            <?php foreach( $json->{'results'} as $ppl ): ?>
                <a
                    href="<?php print $ppl->link ?>"
                    title="<?php print $ppl->name ?>"
                    <?php if(isset($ppl->photo)): ?>
                        style="background-image:url('<?php print $ppl->photo->thumb_link; ?>')"
                    <?php else: ?>
                        style="background-image:url('/assets/images/logo.png'); background-size:contain;"
                    <?php endif; ?>
                    ><?php print $ppl->name ?></a>
            <?php endforeach; ?>
        </div>
    </footer>

</body>
</html>
