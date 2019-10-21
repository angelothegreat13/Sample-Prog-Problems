<?php

function even_numbers_before_fixed($seq,$fixed)
{
    $num = -1;
    $pos = -1;

    for ($i = 0; $i < sizeof($seq); $i++) {

        if ($seq[$i] == $fixed) {
            $num = $seq[$i - 1];
            $pos = $i - 1;
            break;
        }
    }

    if ($pos == 0) {
        echo 1;
    }
    else {
        echo $num;
    }
}

$seq = [2, 2, 2, 1];
// $seq = [2, 3, 4, 3];
$fixed = 3;

even_numbers_before_fixed($seq,$fixed);