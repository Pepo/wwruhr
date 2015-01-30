            </article>
            <aside>
                <h2>Location</h2>
                <p>Wir treffen uns im Unperfekthaus in Essen</p>
                <iframe width="100%" height="319" src="http://a.tiles.mapbox.com/v3/derpepo.map-1c7zpsc7.html#16/51.45872669642711/7.007458806037903" sandbox="allow-scripts"></iframe>
                <p>Haltestelle: Berliner Platz</p>
                <ul>
                    <li>U11, U17 und U18 (U-Bahn)</li>
                    <li>101, 103, 105 und 109 (Tram)</li>
                    <li>145, 147, 166 und SB16 (Bus)</li>
                    <li>NE10, NE11, NE12 und NE16 (Nachtexpress)</li>
                </ul>
                <h2>Kollegen und Kumpels</h2>

                <p><a href="http://www.webworker-nrw.de"><img src="/assets/images/wwnrw.jpg"></a></p>
                <p><a href="http://www.pottjs.de"><img src="/assets/images/pott_js.jpg"></a></p>
                <p><a href="http://www.beyondtellerrand.de"><img src="/assets/images/beyondtellerrand.jpg"></a></p>
                <p><a href="http://www.getkirby.com"><img src="/assets/images/kirby.jpg"></a></p>


            </aside>
        </div>
    </section>
    <footer class="clearfix">
        <div class="container">
            <h2>Willkommen im Ruhrgebiet, wo man Gesichter &bdquo;Fressen&ldquo; nennt! <span>(Frank Goosen)</span></h2>
            <h3>Diese Menschen sind Teil der <a href="http://www.meetup.com/wwruhr/">Meetup.com-Gruppe Webworker Ruhr</a></h3>

            <div class="ppl">
                <?php $json = json_decode( file_get_contents("https://api.meetup.com/2/members?group_id=17613862&key=484c52501a463038165f2827e1175") ) ?>

                <?php foreach( $json->{'results'} as $ppl ): ?>
                    <a
                        href="<?php print $ppl->link ?>"
                        title="<?php print $ppl->name ?>"
                        <?php if( isset($ppl->photo) ): ?>
                            style="background-image:url('<?php print $ppl->photo->thumb_link; ?>')"
                        <?php else: ?>
                            style="background-image:url('/assets/images/logo.png'); background-size:contain;"
                        <?php endif; ?>
                        ><?php print $ppl->name ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </footer>

</body>
</html>
