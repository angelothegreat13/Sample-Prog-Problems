<?php 

function least_factorial($num) {

    $factorial = 1;
    $least_factorial = 0;

    for ($i = 1; $i <= $num; $i++) {

        $factorial = $factorial * $i;

        if ($num <= $factorial) {
            $least_factorial = $factorial;
            break;
        }
    }
    
    echo $least_factorial;

}

least_factorial(24); //6