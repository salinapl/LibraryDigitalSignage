<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<ul>
    <li><a href="<?= page('slideshows')->url() ?>">Load Current Default Slideshow (Autodetect)</a></li>
    <?php foreach ($site->page('slideshows')->children() as $link): ?>
        <li><a href="<?= $link->url() ?>/landscape">Campaign: <?= $link->title() ?> (Landscape)</a></li>
    <?php endforeach ?>
    <?php foreach ($site->page('slideshows')->children() as $link): ?>
        <li><a href="<?= $link->url() ?>/landscape">Campaign: <?= $link->title() ?> (Portrait)</a></li>
    <?php endforeach ?>
</ul>
<h2>Web Slides</h2>
<ul>
    <?php foreach ($site->page('slides')->children() as $link): ?>
        <li><a href="<?= $link->url() ?>"><?= $link->title() ?></a></li>
    <?php endforeach ?>
</ul>
<?php snippet('footer') ?>
