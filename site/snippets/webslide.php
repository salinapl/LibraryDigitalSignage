<?php 
    $webslides = page('web-slides')->children();
    $webslides = $webslides->filterBy('tags', 'in', $page->tags()->split(','), ',');

// orientation variable MUST be passed by snippet
?>

<?php foreach ($webslides->sortBy('sort','asc') as $slide): ?>
    <!-- filter for only slides that are supposed to be visible -->
    <?php if (($slide->expire()->toDate('Y-m-d') > date('Y-m-d')) && ($slide->start()->toDate('Y-m-d') <= date('Y-m-d'))): ?>
        <iframe class="carousel-cell" src="<?= $slide->url() ?>" scrolling="no"></iframe>
    <?php endif ?>
<?php endforeach ?>