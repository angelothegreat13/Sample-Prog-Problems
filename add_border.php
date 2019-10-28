<?php 

function add_border($pic)
{
    $bordered_pic = '';

    // print_r($pic);

    for ($i = 0; $i < sizeof($pic); $i++) {

        // echo '*';
        // $bordered_pic .= $pic[$i]."\n";

    }

    // printf($bordered_pic);
}

$pic = ["abc", 
        "ded"];

add_border($pic);