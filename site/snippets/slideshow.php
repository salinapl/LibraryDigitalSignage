<?php 
    $url = $_SERVER['REQUEST_URI'];
    $gallery = page($page->gallery())->images();
    $gallery = $gallery->filterBy('tags', 'in', $page->tags()->split(','), ',');

    // orientation can be passed by snippet if the inclusion
    // Is embeded into the page (see opac page for example)
    // Otherwise, it determines orientation by looking at the URL
    if(strpos($url, 'portrait')) {
        $orientation = 'portrait';
    } elseif(strpos($url, 'landscape')){
        $orientation = 'landscape';
    }
    $slides = array();
    $class = 'class="carousel-cell ad" style="background-image:url(';
    foreach ($gallery->sortBy('sort','asc') as $image){
        $string = "<a ";
        if (($image->expire()->toDate('Y-m-d') > date('Y-m-d')) && ($image->start()->toDate('Y-m-d') <= date('Y-m-d'))) {
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
    // Script for Extracting Web Slides
    $webslides = page('web-slides')->children();
    $webslides = $webslides->filterBy('tags', 'in', $page->tags()->split(','), ',');

    foreach ($webslides->sortBy('sort','asc') as $slide){
        $string = '<iframe class="carousel-cell" src="';
        if (($slide->expire()->toDate('Y-m-d') > date('Y-m-d')) && ($slide->start()->toDate('Y-m-d') <= date('Y-m-d'))){
            $string .= $slide->url();
            $string .= '" scrolling="no"></iframe>';
            array_push($slides, $string);
        }
    }
    if (count($slides) > 0){

    }
    shuffle($slides);
    foreach($slides as $slide){
        echo $slide . "\n";
    }


?>
