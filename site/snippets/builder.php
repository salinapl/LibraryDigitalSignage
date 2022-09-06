<?php 
    $url = $_SERVER['REQUEST_URI'];
    // Fetches the selected gallery based on the campaign page
    // then filters the gallery based on the selected tags.
    $gallery = page($page->gallery())->images();
    $gallery = $gallery->filterBy(
        'tags', 'in', $page->tags()->split(','), ','
    );

    // orientation can be passed by snippet if the inclusion
    // Is embeded into the page (see opac page for example)
    // Otherwise, it determines orientation by looking at the URL
    if(strpos($url, 'portrait')) {
        $orientation = 'portrait';
    } elseif(strpos($url, 'landscape')){
        $orientation = 'landscape';
    }

    // Creates an empty array then filters gallery first on if an image is
    // within it's active date range, then on its orientation. Afterward it
    // assembles the html and outputs the result into the array.
    $slides = array();
    $class = 'class="carousel-cell ad" style="background-image:url(';
    foreach ($gallery->sortBy('sort','asc') as $image){
        $string = "<a ";
        if (
            (
                $image
                    ->expire()
                    ->toDate('Y-m-d') > date('Y-m-d')
            ) && 
            (
                $image
                    ->start()
                    ->toDate('Y-m-d') <= date('Y-m-d')
            )
        ) {
            if($image->orientation() == $orientation){
                if($image->orientation() == 'portrait'){
                    if ($image->link()->isNotEmpty()){
                        $string .= "href={$image->link()->url()} ";
                    }
                    $string .= $class;
                    $string .= $image->resize(null, 1080)->url();
                    $string .= ')"></a>';
                    array_push($slides, $string);
                }
                else {
                    $string .= $class;
                    $string .= $image->resize(1080, null)->url();
                    $string .= ')"></a>';
                    array_push($slides, $string);
                }
            }
        }
    }
    // Queries the web-slides page and gets an array of it's child pages,
    // it then filters the pages based on the selected tags. The error page
    // will never be selected as it does not have any set tags.
    $webslides = page('web-slides')->children();
    $webslides = $webslides->filterBy(
        'tags', 'in', $page->tags()->split(','), ','
    );

    foreach ($webslides->sortBy('sort','asc') as $slide){
        $string = '<iframe class="carousel-cell" src="';
        if (
            (
                $slide
                    ->expire()
                    ->toDate('Y-m-d') > date('Y-m-d')
            ) && (
                $slide
                    ->start()
                    ->toDate('Y-m-d') <= date('Y-m-d')
            )
        ){
            $string .= $slide->url();
            $string .= '" scrolling="no"></iframe>';
            array_push($slides, $string);
        }
    }
    // Counts the number of slides in the array, if it's zero, throws error slide 
    if (count($slides) <= 0){
        $string = '<iframe class="carousel-cell" src="';
        $string .= $site->page('web-slides/error-slide')->url();
        $string .= '" scrolling="no"></iframe>';
        array_push($slides, $string);
    }
    // Sorts the sides (random) and then prints each slide into html
    shuffle($slides);
    foreach($slides as $slide){
        echo $slide . "\n";
    }


?>
