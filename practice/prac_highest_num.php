<?php 

function highest_num($arr)
{
    $highest_num = 0;

    for ($i=0; $i < count($arr) ; $i++) { 

        if ($arr[$i] > $highest_num) {
            $highest_num = $arr[$i];
        }
    }
   
    echo $highest_num;
}

$arr = [10,4,6,2,8,9,2,4,6];

highest_num($arr);


