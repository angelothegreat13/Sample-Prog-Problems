<?php 

function arrayReverse($arr)
{
    $n = sizeof($arr);
    $i = 0;

    while ($i  < $n) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$n - 1];
        $arr[$n - 1] = $temp;
        $i++;
        $n--;
    }

    print_r($arr);
}

$arr = [1,4,8,9,20,3];
// arrayReverse($arr);

function reverseArray($arr)
{
    $n = sizeof($arr);
    $reversed_arr = [];

    for ($i = $n - 1; $i >= 0; $i--) {
        array_push($reversed_arr,$arr[$i]);
    }

    print_r($reversed_arr);
}

// reverseArray($arr);