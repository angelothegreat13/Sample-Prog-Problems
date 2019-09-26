<?php 

function distinct($arr)
{
    $len = sizeof($arr);

    for ($i = 0; $i < $len; $i++) {


        for ($j = 0; $j < $len; $j++) {

            if ($arr[$i] === $arr[$j]) {
                break;
            }
        }

        if ($i === $j) {
            echo $arr[$i].' ';
        }

    }   
    
}

$arr = [1,1,2,5,6,7,2,6,8,9];
// $arr = [1,2,3,4];

distinct($arr);

