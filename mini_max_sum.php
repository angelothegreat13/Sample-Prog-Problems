<?php 

function total_sum($num)
{
    $sum = 0;

    for ($i=0; $i < count($num); $i++) { 
        $sum += $num[$i];
    }

    return $sum;
}

function mini_max_sum($arr)
{
    $len = count($arr);
    $max = [];
    $mini = [];

    sort($arr);

    for ($i=0; $i != 4; $i++) { 
        $max[] = $arr[($len - 1) - $i];
        $mini[] = $arr[$i];
    }

    echo total_sum($max).' '.total_sum($mini);
}

$arr = [1,2,3,4,5];
mini_max_sum($arr);

