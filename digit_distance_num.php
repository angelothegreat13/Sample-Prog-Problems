<?php

function digitDistanceNumber($n) 
{
    $n = (string)$n;
    $d = '';

    for ($i = 0; $i < strlen($n) - 1; $i++) {

        $t = intval($n[$i + 1]) - intval($n[$i]);
        $d .= abs($t);
    }

    printf($d);
}

$n = 2744;

digitDistanceNumber($n); 