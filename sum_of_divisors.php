<?php

function sum_of_divisors($n)
{
    $sum = 0;

    for ($i=1; $i <= $n; $i++) { 

        if ($n % $i == 0) {
            $sum = $sum + $i;
        }

    }

    echo $sum;
}

sum_of_divisors(12);