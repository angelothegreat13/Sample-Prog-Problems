<?php 


function second_highest_num($arr)
{
    $arr = array_unique($arr);

    sort($arr);

    echo $arr[count($arr) - 2];
}

$arr = [12,2,13,6,8,10,22,7];

// second_highest_num($arr);

function max_two($arr)
{
    $max_1 = $num[0];
    $max_2 = $num[0];

    for ($i=0; $i < count($arr); $i++) 
    { 
        if ($arr[$i] > $max_1) {
            $max_2 = $max_1;
            $max_1 = $arr[$i];
        }

        if ($arr[$i] < $max_1 && $arr[$i] > $max_2) {
            $max_2 = $arr[$i];
        }
    }

    echo $max_2;
}

max_two($arr);