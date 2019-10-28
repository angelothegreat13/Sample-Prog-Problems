<?php 

function allLongestStrings($arr) 
{
    $n = sizeof($arr);

    if ($n <= 1) {
        print_r($arr);
        return;
    }

    $max = strlen($arr[0]);
    $long_strings = [];

    for ($i = 0; $i < $n; $i++) {

        $s = strlen($arr[$i]);

        if ($s > $max) {
            $max = $s;
        }

    }

    for ($k = 0; $k < $n; $k++) {

        $s = strlen($arr[$k]);
        
        if ($s >= $max) {
            $max = $s;
            $long_strings[] = $arr[$k];
        }
    
    }
    
    print_r($long_strings);
}

$arr = ["abc", "eeee", "abcd", "dcd"];

allLongestStrings($arr);