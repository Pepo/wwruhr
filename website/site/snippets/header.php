<!DOCTYPE html>
<html lang="de">
<head>

  <title>Webworker Ruhr <?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic,400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Donegal+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/screen.css" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/"><img src="/assets/images/logo.png" alt="Webworker Ruhr Logo"></a>
            <h1>Webworker Ruhr</h1>
            <aside>
                <h2>Nächster Termin</h2>
                <time datetime="2012-24-01T19:00+00:00">27. November 2014 - 19:00 Uhr</time>

                <h3>Themen</h3>
                <ul>
                    <li>SOLID (object-oriented design)</li>
                    <li>Bessere Logingformulare. "Login failed. Retry?"</li>
                </ul>
            </aside>
        </header>
        <nav>
            <?php foreach($pages as $page): ?>
                <a href="<?php print $page->url() ?>">
                <?php print $page->title() ?></a>
            <?php endforeach; ?>
        </nav>


        <section>
        <article>
