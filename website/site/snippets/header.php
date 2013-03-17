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
