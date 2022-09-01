<?php 
    $gallery = page(page($page->slides())->gallery())->images();
    $tags = page(page($page->slides())->tags());


// <?php if ($page->parent()->title() = "OPAC Pages") {
//     $gallery = page($slides->gallery())->images();
//     $tags = page($slides->tags());
// } else {
//     $gallery = page($page->gallery())->images();
//     $tags = page($page->tags());
// }

// orientation variable (passed to snippet)
$orientation = 'landscape';
 ?>

<?php foreach ($gallery->sortBy('sort','asc') as $image): ?>
    <!-- filter for only images that are supposed to be visible -->
    <?php if (($image->expire()->toDate('Y-m-d') > date('Y-m-d')) && ($image->start()->toDate('Y-m-d') <= date('Y-m-d'))): ?>
        <!-- match orientation to image -->
        <?php if($image->orientation() == $orientation): ?>
            <?php if($image->orientation() == 'portrait'): ?>
                <div class="carousel-cell ad" style="background-image:url(<?= $image->resize(null, 1080)->url() ?>)">
            <?php else: ?>
                <div class="carousel-cell ad" style="background-image:url(<?= $image->resize(1080, null)->url() ?>)">
            <?php endif ?>
                </div>
        <?php endif ?>
    <?php endif ?>
<?php endforeach ?>