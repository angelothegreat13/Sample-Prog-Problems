<?php 

function noOddDigits($n) {
    
    $n = (string)$n;
    $no_odd = '';

    for ($i = 0; $i < strlen($n); $i++) {

        if ((integer)$n[$i] % 2 == 0) {
            $no_odd = $no_odd . $n[$i];
        }
    }

    if ($no_odd == '') {
        echo 0;
    }

    echo $no_odd;
}

$n = 1;

noOddDigits($n); //22

