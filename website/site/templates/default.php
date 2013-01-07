<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic,400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Donegal+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
  <?php echo css('assets/css/screen.css') ?>

</head>

<body>
    <div id="wrapper">
        <header>
            <a href="/"><img src="/assets/images/logo.png" alt="Webworker Ruhr Logo"></a>
            <h1>Webworker Ruhr</h1>
            <aside>
                <h2>Nächster Termin</h2>
                <time datetime="2012-24-01T19:00+00:00">24. Januar 2013 - 19:00 Uhr</time>

                <h3>Themen</h3>
                <ul>
                    <li>GIT2 für Nichtentwickler</li>
                    <li>Grunt für Superheros</li>
                </ul>
            </aside>
        </header>

        <section>
            <article>
                <?= kirbytext($page->text()) ?>


                <h3>Was bisher geschah</h3>

                <?
                    $archiv = $pages->find('archiv')->children();

                ?>
                <? foreach($archiv as $a): ?>
                    <div class="event clearfix">
                        <h4><?= $a->h1() ?></h4>


                        <? $image =  $a->images()->first() ?>
                        <? echo thumb( $image, array('width' => 95, 'height' => 95, 'upscale' => true, 'crop' => true) ); ?>
                        <p><?= $a->shorttext() ?></p>

                    </div>
                <? endforeach; ?>

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

            </article>
            <aside>
                <h2>Location</h2>
                <p>Wir treffen uns im Unperfekthaus</p>
                <p>Karte</p>
                <p>Haltestelle</p>
            </aside>
        </section>
    </div>
    <footer>
    as
    </footer>

</body>
</html>
