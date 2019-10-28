<?php

function isLucky($n) {

    $nl = strlen($n);
    $m = $nl / 2;
    $n = (string)$n;

    $fh = 0;
    $sh = 0;

    for ($i = 0; $i < $nl; $i++) {

        if ($i <= $m - 1) {
            $fh += (int)$n[$i];
        }
        else {
            $sh += (int)$n[$i];
        }
    }

    if ($fh == $sh) {
        return true;
    }

    return false;

    echo $fh;
    echo $sh;
}


$n = 1230;//true
isLucky($n);