<?php 


function sum_of_one_to_num($n)
{
    $start = 1;
    $end = $n;
    $sum = 0;

    for ($i=$start; $i <= $n ; $i++) { 
        $sum += $i;
    }

    echo $sum;
}

sum_of_one_to_num(10);