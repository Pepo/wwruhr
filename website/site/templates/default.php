<?php snippet('header') ?>
                <?php print kirbytext($page->text()) ?>


                <h3>Was bisher geschah</h3>

                <?php
                    $archiv = $pages->find('archiv')->children();
                ?>
                <?php foreach($archiv->flip() as $a): ?>
                    <div class="event clearfix">
                        <h4>
                            <a href="<?php print $a->uri() ?>"><?php print $a->h1() ?></a>
                        </h4>


                        <?php $image =  $a->images()->first() ?>
                        <?php echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <p><?php print $a->shorttext() ?></p>

                    </div>
                <?php endforeach; ?>
<!--
                <div class="event clearfix">
                    <h4>25.10.2012 - Webworker Ruhr 1</h4>
                    <img src="assets/images/wwruhr2.jpg">
                    <p>Christian Schaefer, @derSchepp zeigte eine Präsentation zu Web Perfomance Optimisation</p>
                    <p><a href="archiv">mehr…</a></p>
                </div>
                <div class="event clearfix">
                    <h4>22.11.2012 - Webworker Ruhr 2</h4>
                    <img src="assets/images/wwruhr1.jpg">
                    <p>Gerhard Schörder, zeigte Google+</p>
                    <p>Benjamin Beelbrecht, @bbeelbrecht erklärte uns "Git für Nichtentwickler"</p>
                    <p><a href="archiv">mehr…</a></p>
                </div>

                <div class="event clearfix">
                    <h4>20.12.2012 - Webworker Ruhr 3 <br> Das 1. traditionelle Weihnachtskegeln</h4>
                    <img src="assets/images/wwruhr3.jpg">
                    <p>Zu Weihnachten mal ganz ohne Vorträge, dafür mit viel Spaß auf der Kegelbahn in Essen</p>
                    <p><a href="archiv">mehr…</a></p>
                </div>
            -->
<?php snippet('footer') ?>
