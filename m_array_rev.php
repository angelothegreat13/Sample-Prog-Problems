<?php


$arr = [
    [1,2,3,4,5],
    [6,7,8,9,10],
    [11,12,13,14,15],
    [16,17,18,19,20]
];

function arrayReverse($arr)
{
    $n = sizeof($arr);
    $reversed_arr = [];

    for ($i = $n - 1; $i >= 0; $i--) {

        $jn = sizeof($arr[$i]);
        $j = 0; 

        while ($j < $jn) {
            $temp = $arr[$i][$j];
            $arr[$i][$j] = $arr[$i][$jn - 1];
            $arr[$i][$jn - 1] = $temp;
            $j++;
            $jn--;
        }

        $reversed_arr[] = $arr[$i];

    }

    print_r($reversed_arr);
}


arrayReverse($arr);