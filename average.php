<?php 

function calc_avg($num)
{
    $len = count($num);
    $sum = 0;

    for ($i=0; $i < $len; $i++) { 
        $sum+=$num[$i];
    }

    echo $sum / $len;
}

$num = [2,2,2,2,4,4,4,4];

calc_avg($num);

// [2,2,2,2,4,4,4,4,] = 4

