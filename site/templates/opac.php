<!doctype html>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= site()->title() ?></title>
    <link rel="stylesheet" id="ebor-google-font-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A200%2C300%2C400%2C400i%2C500%2C600%2C700%7CLora%3A400%2C400i%2C700%2C700i%7CMaterial+Icons&amp;ver=10.5.15" type="text/css" media="all">
    <?= css('assets/css/opac.css') ?>
    <link rel="stylesheet" type="text/css" href="<?= site()->url() ?>/assets/css/templates/default.css?<?= date('his'); ?>" />
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
            <div class="logo"><img src="logo.png"></div>
            <h1>I want to...</h1>
        </div>
        <div class="flex-item" style="flex: 1 1 calc(100% - 2rem); margin-bottom: 0">
            <a href="https://discover.salinapubliclibrary.org/">
                <div class="button"><i class="fas fa-search"></i> Search the Catalog or View My Account</div>
            </a>
            <a href="https://salinapubliclibrary.org/programs-services/youth/learning-games?utm_source=opac&utm_medium=website&utm_campaign=youth">
                <div class="button" style="margin-bottom: 5px"><i class="fas fa-gamepad"></i> Play Learning Games</div>
            </a>
        </div>
        <div class="flex-item">
            <a href="https://www.salinapubliclibrary.org?utm_source=opac&utm_medium=website&utm_campaign=youth">
                <div class="button"><i class="fas fa-globe"></i> Explore the Website</div>
            </a>
            <a href="https://salinapubliclibrary.org/research/databases-a-z?utm_source=opac&utm_medium=website&utm_campaign=youth">
                <div class="button"><i class="fas fa-graduation-cap"></i> Search the Databases</div>
            </a>
        </div>

        <div class="flex-item">
            <a href="https://salinapubliclibrary.org/books-media/emedia/">
                <div class="button"><i class="fas fa-tablet-alt"></i> Explore eMaterials</div>
            </a>
            <a href="https://www.salinapubliclibrary.org/events?utm_source=opac&utm_medium=website&utm_campaign=youth">
                <div class="button"><i class="fas fa-calendar-alt"></i> Discover Events</div>
            </a>
        </div>

    </div>
</body>

</html>