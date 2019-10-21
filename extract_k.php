<?php 

function extractEachKth($arr, $k) {

    $extracted_arr = [];
    $n = sizeof($arr);

    for ($i = 0; $i < $n; $i++) {

        if (($i + 1) % $k != 0) {
            $extracted_arr[] = $arr[$i];
        }

    }

    print_r($extracted_arr);
}


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$k = 3;

// [1, 2, 4, 5, 7, 8, 10]
extractEachKth($arr,$k);