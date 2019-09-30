<?php 

function remove_duplicate_chars($str)
{
    $index = 0;

    for ($i = 0; $i < strlen($str); $i++) {

        for ($j=0; $j < $i; $j++) { 
    
            if ($str[$i] == $str[$j]) {
                break;
            }
        }

        if ($j == $i) {
            $str[$index++] = $str[$i];
        }

    }

    echo $str;
}
    
    $str = "zaabcbd";

remove_duplicate_chars($str);