<?php

function chunk_array($arr,$num)
{
    $two_d_arr = [];
    
    while (sizeof($arr) != 0) {
        array_push($two_d_arr, array_slice($arr,0,$num));
        $arr = array_slice($arr,$num);
    }
    
    print_r($two_d_arr);
}

$arr = [0,1,2,3,4,5]; 

chunk_array($arr,3); 






