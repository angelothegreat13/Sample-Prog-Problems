<?php

function html_end_tag($st)
{
    $t = explode('<',$st);
    $pt = preg_split('/\s+/', $t[1]);
    $tn = rtrim($pt[0],'>');


    echo '</'.$tn.'>';
}

// $st = "<button type='button' disabled>";
// $st = "<i>";
$st = "<div id='my_area' class='data' title='This is a test for title on Div tag'>";
html_end_tag($st);


