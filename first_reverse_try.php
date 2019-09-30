<?php 

function first_reverse_try($arr)
{
    if (sizeof($arr) == 0) {
        return $arr;
    }
    
    $first = $arr[0];
    $last = $arr[sizeof($arr) - 1];

    $arr[0] = $last;
    $arr[sizeof($arr) - 1] = $first;
    
    print_r($arr);
}

$arr = [23, 54, 12, 3, 4, 56, 23, 12, 5, 324];

first_reverse_try($arr);