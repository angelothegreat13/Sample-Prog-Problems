<?php 

function reverse_int($int)
{
    $len = strlen((string)$int);
    $reversed = '';

    for ($i = 0; $len; $i++) 
    {
        $reversed = $int[$i].$reversed;
    }

    echo $reversed;

}

reverse_int(152152111);