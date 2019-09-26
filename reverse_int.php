<?php 

function reverse_int($int)
{
    $reversed = "";


    for ($i=0; $i < strlen($int); $i++) { 
        $reversed = $int[$i] . $reversed;
    }

    echo $reversed;

}

reverse_int(123456);
