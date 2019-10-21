<?php 

/* 
Define an alphabet reflection as follows: 
    a turns into z, 
    b turns into y, 
    c turns into x,
    n turns into m, 
    m turns into n,
    z turns into a.
*/
function reflect_string($str)
{
    $reflect_word = '';
    $start = 97;
    $end = 122;


    for ($i = 0; $i < strlen($str); $i++) {

        for ($j = $start; $j <= $end; $j++) {

            if ($str[$i] == chr($j)) {
                
                $s = $j - $start;
                $reflect_word .= chr($end - $s);
            }

        }

    }

    echo $reflect_word;
}


$str = 'name';

reflect_string($str); //mznv - zvmn