<?php 

function longestWord($str)
{
    $words = preg_split('/[^A-Za-z0-9\-]/',$str);

    $longest_word_length = 0;
    $longest_word = '';

    foreach ($words as $word) {
        if (strlen($word) > $longest_word_length) {
            // echo strlen($word)."\n";
            $longest_word_length = strlen($word);
            $longest_word = $word;
        }
    }
    
    echo $longest_word;
    // echo $longest_word_length;
}


longestWord('the $$$longestestststs# word is coderbyte');