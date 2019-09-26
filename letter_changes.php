<?php 

/**
 *  Replace every letter in the string with the letter following it in the alphabet 
 * (ie. c becomes d, z becomes a). 
 * Then capitalize every vowel in this new string (a, e, i, o, u) and 
 * finally return this modified string
 */

//  Input:"hello*3"
// Output:Ifmmp*3
// Input:"fun times!"
// Output:gvO Ujnft!
function letter_changes($str)
{
    $vowels = ['a','e','i','o','u'];
    $new_word = '';

    // 97 - 122 ascii small letters
    for ($i=0; $i < strlen($str); $i++) 
    { 
        $char = ord(strtolower($str[$i])); // convert string to ascii 

        // /^[a-zA-Z]$/
        if (!preg_match('/^[a-z]$/', strtolower($str[$i]))) {
            $new_word .= $str[$i];  
        }
        else {
            if (chr($char) === 'z') {
                $new_word .= 'a';
            }
            elseif (in_array(chr($char + 1),$vowels)) {
                $new_word .= strtoupper(chr($char + 1));
            }
            else {
                $new_word .= chr($char + 1);
            }
        }
    }
    
    echo $new_word;
}

letter_changes('fun times!'); // gvO Ujnft!