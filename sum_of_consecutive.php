<?php 

function isSumOfConsecutive($n) {

    $is_consecutive =  (($n & ($n - 1)) && $n);

    if ($is_consecutive) {
        echo 'true';
    }
    else {
        echo 'false';
    }
}

$n = 8;

isSumOfConsecutive($n);