<?php 

function check_if_prime($num)
{
    $prime = true;

    for ($i=2; $i < $num ; $i++) 
    { 
        if ($num % $i == 0) {
            $prime = false;
            break;        
        }
    }

    if ($prime) {
        echo $num .' is Prime Number';
    }
    else { 
        echo $num .' is not a Prime Number';
    }
}

check_if_prime(2);

