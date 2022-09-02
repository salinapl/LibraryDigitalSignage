<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $page->htmltitle() ?></title>
        <?= css('assets/css/bootstrap-reboot.min.css') ?>
        <link rel="stylesheet" id="ebor-google-font-css" href="fonts.googleapis.com/css?family=Open+Sans%3A200%2C300%2C400%2C400i%2C500%2C600%2C700%7CLora%3A400%2C400i%2C700%2C700i%7CMaterial+Icons&amp;ver=10.5.15" type="text/css" media="all">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <?= css('assets/css/opac.css') ?>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-17015989-7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-17015989-7');

        </script>
    </head>
    <body>
        <div class="flex-box">
            <div class="flex-item">
                <div class="flex-full-width">

                    <div class="logo">
                        <?php if($headerImage = $page->header_image()->toFile()): ?>
                            <img src="<?= $headerImage->url() ?>">
                        <?php endif ?>
                    </div>
                    <h1><?= $page->headline() ?></h1>
                </div>
                <nav class="nav-wrapper">
                    <?php foreach($page->links()->toStructure() as $links): ?>
                    <a class="button flex-button" href="<?= $links->link() ?>"><i class="<?= $links->icon() ?>"></i><?= $links->description() ?></a>
                    <?php endforeach ?>
                </nav>
            </div>
            <?php if($page->sidebar()->bool()): ?>
                <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": <?= $page->delay() ?>, "pauseAutoPlayOnHover": false, "wrapAround": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false}'>
                    <?php snippet('slideshow', ['orientation' => 'portrait']) ?>
                </div>
            <?php endif ?>
        </div>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    </body>
</html>