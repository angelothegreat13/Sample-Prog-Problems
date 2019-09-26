<?php

// F (1) = 1, 1, 2, 3, 5, 8, 13, 21, 34

function recursive_fibonacci($term)
{
    if ($term == 0) {
        return 1;
    }
    elseif ($term == 1) {
        return 1;
    }
    else {
        return recursive_fibonacci($term - 1) + recursive_fibonacci($term - 2);
    }
}

$term = 10;

// for ($i=0; $i < $term; $i++) { 
//     echo recursive_fibonacci($i).' ';
// }


function loop_fibonacci($term)
{
    $num1 = 1;
    $num2 = 1;
    $next_term = 0;
    $i = 2;

    echo $num1.' '.$num2.' ';

    while ($i < $term) {
        $next_term = $num1 + $num2;
        echo $next_term.' ';
        $num1 = $num2;
        $num2 = $next_term;
        $i++;
    }
}

loop_fibonacci($term);