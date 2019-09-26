<?php

function alphabet_soup($word)
{
    $word_arr = [];

    for ($i=0; $i < strlen($word); $i++) { 
        $word_arr[] = $word[$i];
    }

    sort($word_arr);

    for ($j=0; $j < count($word_arr); $j++) { 
        echo $word_arr[$j];
    }
}

alphabet_soup('coderbyte');
// Output:bcdeeorty