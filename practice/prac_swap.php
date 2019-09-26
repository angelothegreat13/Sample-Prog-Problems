<?php 

function swap($a,$b)
{
    $a = $b + $a; //100
    $b = $a - $b; // 100 - 55 = 45
    $a = $a - $b; // 100 - 45 = 55

    // a = 45 -> 55
    // b = 55 -> 45

    echo $a .' '. $b;
}

$a = 45;
$b = 55;

swap($a,$b);