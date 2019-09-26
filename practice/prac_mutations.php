<?php 

function mutations($arr)
{
    $str1 = strtolower($arr[0]);
    $str2 = strtolower($arr[1]);
    $c = 0;

    for ($i=0; $i < strlen($str1); $i++) { 

        for ($j = 0; $j < strlen($str2); $j++) {
            if ($str1[$i] == $str2[$j]) {
                $c++;
            }
        }
    }
    
    echo ($c >= strlen($str2)) ? 'True' : 'False' ;
}

mutations(['Michael Angelo Manaog','Michael']);