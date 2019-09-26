<?php 

function simple_symbols($str)
{
    $str = '='.$str.'=';

    $regex = '/^[a-zA-Z]&/';

    for ($i = 0; $i < strlen($str); $i++) { 

        if (preg_match('/^[a-zA-Z]$/',$str[$i])) {

            if ( ($str[$i - 1] !== '+') || ($str[$i + 1] !== '+') ) {
                return 'false';
            }

        }

    }

    return 'true';
}

// Input:"+d+=3=+s+"
// Output:true
// Input:"f++d+"
// Output:false
echo simple_symbols('+d+=3=+s+');