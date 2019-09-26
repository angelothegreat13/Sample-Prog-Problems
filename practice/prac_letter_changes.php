<?php 


function letter_changes($word)
{
    $word = str_split($word);
    $vowels = ['a','e','i','o','u'];
    $alphabet = range('a','z');
    $new_word = [];
    
    for ($i = 0; $i < count($word); $i++) {

        if (in_array($word[$i], $alphabet)) {

            $new_word[]= ($word[$i] == 'z') ? 'a' : ++$word[$i];

            if (in_array($new_word[$i],$vowels)) {
                $new_word[$i]= strtoupper($new_word[$i]);
            }

        }
        else {
            $new_word[]= $word[$i]; 
        }

    }

    echo join('',$new_word);
}

/* 
Input:"hello*3"
Output:Ifmmp*3

Input:"fun times!"
Output:c
*/

letter_changes('fun times!');