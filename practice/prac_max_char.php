<?php 

function max_char($str)
{
    $char_map = [];
    $max_char = '';

    for ($a=0; $a < strlen($str); $a++) { 
        $char_map[$str[$a]] = NULL;
    }

    for ($i = 0; $i < strlen($str); $i++) {

        if ($char_map[$str[$i]]) {
            $char_map[$str[$i]]++;
        }
        else {
            $max_char[$str[$i]] = 1;
        }
       
    }

    var_dump($char_map);

    // echo $max_char;
}

$str = 'MMMMMMMMMMMMMMMMMMMMMMMMMMMICHAELLLLLLLLLLLLLLKKKKKKKK';

max_char($str);
