<?php 

function sortByHeight($arr) 
{
    $n = sizeof($arr);
    $keys = [];
    $sorted_arr = [];

    
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] === - 1) {
            array_push($keys,$i); // Get all the key of -1 element and store it in array           
        }
        else {
            array_push($sorted_arr,$arr[$i]); // Get all the key of not -1 element and store it in array
        }
    }

    sort($sorted_arr); // sort the array 

    foreach ($keys as $key) {
        array_splice($sorted_arr,$key, 0, -1); // insert -1 to sorted array at specific key
    }

    print_r($sorted_arr);
}

$arr = [-1, 150, 190, 170, -1, -1, 160, 180]; //[-1, 150, 160, 170, -1, -1, 180, 190]

sortByHeight($arr); 