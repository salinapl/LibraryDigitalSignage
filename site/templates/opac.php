<!doctype html>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $page->htmltitle() ?></title>
        <?= css('assets/css/bootstrap-reboot.min.css') ?>
        <link rel="stylesheet" id="ebor-google-font-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A200%2C300%2C400%2C400i%2C500%2C600%2C700%7CLora%3A400%2C400i%2C700%2C700i%7CMaterial+Icons&amp;ver=10.5.15" type="text/css" media="all">
        <?= css('assets/css/opac.css') ?>
        <script src="https://kit.fontawesome.com/e8488bdb42.js"></script>
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
            <div class="flex-full-width">
                <div class="logo"><img src="<?= image('logo.png')->url() ?>"></div>
                <h1><?= $page->headline() ?></h1>
            </div>
            <ul>
                <?php foreach($page->links()->toStructure() as $links): ?>
                <li class="flex-item"><a class="button" href="<?= $links->link() ?>"><i class="<?= $links->icon() ?>"></i><?= $links->description() ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </body>
</html>