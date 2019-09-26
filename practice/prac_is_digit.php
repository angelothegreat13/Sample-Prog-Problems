<?php 

function is_digit($symbol)
{
    $symbol = ord($symbol);
    $is_digit = false;

    for ($i = 48; $i <= 57; $i++) {
        if ($symbol == $i) {
            $is_digit = true;            
        }
    }
    
    return $is_digit;
}

var_dump( is_digit('1') );