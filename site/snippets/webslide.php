<?php 
    //Okay to delete this snippet, it's redundant and unused now
    $webslides = page('web-slides')->children();
    $webslides = $webslides->filterBy('tags', 'in', $page->tags()->split(','), ',');
    $slidesWeb = array();

    foreach ($webslides->sortBy('sort','asc') as $slide){
        $string = '<iframe class="carousel-cell" src="';
        if (($slide->expire()->toDate('Y-m-d') > date('Y-m-d')) && ($slide->start()->toDate('Y-m-d') <= date('Y-m-d'))){
            $string .= $slide->url();
            $string .= '" scrolling="no"></iframe>';
            array_push($slidesWeb, $string);
        }
    }

?>
