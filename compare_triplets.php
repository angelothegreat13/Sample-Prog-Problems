<?php


function compareTriplets($a, $b) {

    $a_points = 0;
    $b_points = 0;
    $arr_size = count($a);

    for ($i = 0; $i < $arr_size; $i++) {

        if ($a[$i] > $b[$i]) {
            $a_points += 1;
        }
        elseif ($b[$i] > $a[$i]) {
            $b_points += 1;
        }

    }

    echo $a_points.' '.$b_points;

}

$a = [17, 18, 30];
$b = [99, 16, 8];

compareTriplets($a,$b);
