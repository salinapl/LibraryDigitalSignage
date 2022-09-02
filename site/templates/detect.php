<?php snippet('header') ?>
<script>
    if (window.matchMedia("(orientation: portrait)").matches) {
        // you're in PORTRAIT mode
        window.location.replace("http://ds.salinalibrary.info/selfcheck/portrait");
    }

    if (window.matchMedia("(orientation: landscape)").matches) {
        // you're in LANDSCAPE mode
        window.location.replace("http://ds.salinalibrary.info/selfcheck/landscape");
    }
</script>
<?php snippet('footer') ?>
