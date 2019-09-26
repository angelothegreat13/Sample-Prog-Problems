<?php

// function chunk_array($arr,$num)
// {
//     $two_d_arr = [];
    
//     while (sizeof($arr) != 0) {
//         array_push($two_d_arr, array_slice($arr,0,$num));
//         $arr = array_slice($arr,$num);
//     }
    
//     print_r($two_d_arr);
// }

function chunk_array($arr,$num)
{
    $chunked_arr = [];

    for ($i = 0; $i < sizeof($arr); $i++) {

        $last_arr = $chunked_arr[ sizeof($chunked_arr) - 1];

        if (!$last_arr || sizeof($last_arr) == $num) {
            array_push($chunked_arr,[ $arr[$i] ]);
        }
        else {
            array_push($last_arr,$arr[$i]);
        }

    }

    print_r($chunked_arr);
}


$arr = [0,1,2,3,4,5]; 

chunk_array($arr,3); 






