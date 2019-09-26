<?php 

function max_char($str)
{   
    $str_len = strlen($str);
    $ascii = [];
    
    for ($c = 0; $c <= 255; $c++) {
        $ascii[$c] = NULL;
    }

    // print_r($ascii);
    
    $max = 0;

    for ($i = 0; $i < $str_len; $i++) {

        $a = ord($str[$i]);

        if ($max < $ascii[$a]) {
            $max = $ascii[$a];
            $result = $str[$i];
        }
        else {
            $ascii[$a]++.' ';
        }

    }

    echo $result;
}

max_char('MMMMMMMMMMMMMMMMMMMMMMMMMMMICHAEKKKKKKKK');