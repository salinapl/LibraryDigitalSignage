<?php snippet('header') ?>
        <?= css('assets/css/flickity.min.css') ?>
        <?= css('assets/css/templates/slideshow.css') ?>
    </head>
    <body>
        <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": <?= $page->delay() ?>, "pauseAutoPlayOnHover": false, "wrapAround": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false}'>

            <?php snippet('slideshow', ['orientation' => 'landscape']) ?>
            <?php snippet('webslide') ?>

        </div>
        <?php snippet('footer') ?>
