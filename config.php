<?php defined ('ABSPATH') or die ('Access denied!');

// default plugin options
$fadegal_config = array(
    'connectOnSamePage' => false
    );

// default widget instance options
$jquery_fadegal_config = array(
    'initialDelay'      =>  600  , // milliseconds
    'initialEffect'     =>  true , // play a first time show effect
    'initialEffectType' => 'fade', // effects: fade, slide, popup
    'alwaysVisible'     =>  true , // if always visible or it should popup like a gallery

    'animation'         =>  true ,
    'animationDuration' =>  1000 ,
    'animationType'     => 'fade', // transitional animations: fade, slide, popup

    'maxItems'          =>  1,     // maximum visible items
    //'selectedClass'     => 'selected',

    'autoWidth'         =>  false,
    'autoHeight'        =>  true ,
    //'staticPadding'     =>  true ,

    'navigation'        =>  true  ,
    //'navPrevStyle'      => '#prev',
    //'navNextStyle'      => '#next',
    'itemChangeEvent'   => 'click', // click, hover or dblclick

    //'itemTagName'       => 'img',   // ex. tags: img, li, a
    'navigatorFor'      =>  array()
    );

?>
