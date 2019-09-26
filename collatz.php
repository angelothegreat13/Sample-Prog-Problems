<?php 

function collatz($n)
{
    while ($n != 1) 
    {
        echo $n . " ";

        if ($n % 2 == 0) {
            $n = $n / 2; 
        }
        else {
            $n = 3 * $n + 1; 
        }
    }

    echo $n;
}


collatz(13);
