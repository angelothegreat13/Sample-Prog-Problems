<?php 

function largest_num($arr)
{
    $largest_num = $arr[0];
    
    for ($i=0; $i<count($arr); $i++) {
        
        if ($arr[$i] > $largest_num) {
            $largest_num = $arr[$i];
        }
    }

    echo $largest_num;
}

$arr = [-65,-89,-23,-2,-14];

largest_num($arr);

