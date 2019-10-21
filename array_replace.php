<?php

function arrayReplace($arr, $elem, $sub) {

    for ($i = 0; $i < sizeof($arr); $i++) {

        if ($arr[$i] == $elem) {
            $arr[$i] = $sub;
        }
    }

    print_r($arr);
}

$arr = [1, 2, 1];
$elem = 1;
$sub = 3;

arrayReplace($arr,$elem,$sub); // 323

