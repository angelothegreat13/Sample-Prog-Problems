<?php 

/* 
    Fibonacci Problem
    Term = 10 
    Output = 0 1 1 2 3 5 8 13 21 34
*/

function fibonacci($num)
{   
    $term1 = 0;
    $term2 = 1;
    $next_term = 0;

    $i = 0;

    while ($i < $num) 
    {
        if ($i == 0) {
            echo $term1.' ';
        }
        elseif ($i == 1) {
            echo $term2.' ';
        }

        $next_term = $term1 + $term2;
        $term1 = $term2;
        $term2 = $next_term;

        echo $next_term.' ';
        $i++;
    }
}

// fibonacci(10);

function recursive_fibonacci($num)
{
    if ($num == 0) {
        return 0;
    }
    elseif ($num == 1) {
        return 1;
    }

    return recursive_fibonacci($num - 1) + recursive_fibonacci($num - 2);
}

// $term = 10;

// for ($i=0; $i < $term; $i++) { 
//     echo recursive_fibonacci($i) . ' ';
// }


/* 
    Starting with any positive integer N, Collatz sequence is defined corresponding to n as the numbers formed by the following operations :

    If n is even, then n = n / 2.
    If n is odd, then n = 3*n + 1.
    Repeat above steps, until it becomes 1.

    Input : 3
    Output : 3, 10, 5, 16, 8, 4, 2, 1     
*/

function collatz($num)
{
    while ($num != 1) {

        echo $num.' ';

        if ($num & 1) {
            $num = (3 * $num) + 1;
        }
        else {
            $num = $num / 2;
        }
    }

    echo $num;
}

collatz(6);

function fibonacci_up_to_certain_num($num)
{
    $term1 = 0;
    $term2 = 1;
    $next_term = 0;

    echo $term1.' '.$term2.' ';
    
    $next_term = $term1 + $term2;

    while($next_term <= $num) 
    {
        echo $next_term.' ';

        $term1 = $term2;
        $term2 = $next_term;
        $next_term = $term1 + $term2;
    }
}

// fibonacci_up_to_certain_num(100);
















