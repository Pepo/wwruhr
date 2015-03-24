<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webworker Ruhr <?php echo $page->title() ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo html( $site->description() ) ?>">
    <meta name="keywords" content="<?php echo html( $site->keywords() ) ?>">
    <meta name="robots" content="index, follow" />

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic,400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Donegal+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/assets/css/screen.css" />
</head>
<body>
    <header>
        <div class="container">
            <div class="header-inner">
                <a class="logo" href="/">
                    <img src="/assets/images/logo.png" alt="Webworker Ruhr Logo">
                    <h1>Webworker Ruhr</h1>
                </a>

                <nav>
                    <div class="container">
                        <?php foreach($pages as $page): ?>
                            <a href="<?php print $page->url() ?>"><?php print $page->title() ?></a>
                        <?php endforeach; ?>
                    </div>
                </nav>
            </div>

            <aside>
                <h2>Nächster Termin</h2>
                <time datetime="2015-03-26T19:00+00:00">26. März 2015 - 19:00 Uhr</time>

                <h3>Themen</h3>
                
                <ul>
                    <li>IndieWeb Movement mit Nicolai Schwarz</li>

                    <li>Noch ein weiteres Thema. Hast du vielleicht eine Idee? Einfach melden!</li>
                </ul>
                <p><a href="http://www.meetup.com/wwruhr/events/221363578/">Anmelden auf meetup.com/wwruhr</a></p>

            </aside>
        </div>
    </header>

    <section>
        <div class="container">
            <article>
