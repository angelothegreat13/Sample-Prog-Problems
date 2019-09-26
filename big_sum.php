<?php 
/**
 * Calculate and print the sum of the elements in an array, keeping in mind that some of those integers may be quite large.
 * aVeryBigSum has the following parameter(s):
 * ar: an array of integers 
 * 
 */

function aVeryBigSum($ar)
{
    $big_int = 1000000000;
    $sum = 0;
    $arr  = [];

    for ($i=1; $i <= $ar ; $i++) { 
        $arr[] = $big_int + $i;
    }

    for ($j=0; $j < count($arr); $j++) { 
        $sum += $arr[$j];
    }
    
    echo $sum;
}

aVeryBigSum(5);



