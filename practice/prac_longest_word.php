<?php 


function longest_word($sen)
{
    $words = preg_split('/[\W_]/',$sen);
    $words_len = count($words);
    $longest_word_len = 0;
    $longest_word = '';    

    for ($i = 0; $i < $words_len; $i++) {

        if (strlen($words[$i]) > $longest_word_len) {
            $longest_word = $words[$i];
            $longest_word_len = strlen($words[$i]);
        }
    }

    echo $longest_word;
}

$sen = 'the $$$longestestststs13_# word is coderbyt';

longest_word($sen);