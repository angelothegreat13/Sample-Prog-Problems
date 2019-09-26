<?php 

#Write a program that takes an input string, then checks whether the string contains all the characters in the alphabet. #The program should output "Valid." if all characters are present, and a list of missing characters if any are absent. 
#For example:

#Input: "The quick brown fox jumps over the lazy dog."
#Output: "Valid."

#Input: "This is an invalid string."
#Output: "Missing character(s): b c e f j k m o p q u w x y z"

#Limitations:
#Inputs can only be alphabetical characters. No punctuations or numbers. No need to validate inputs.

// ASCII SMALL LETTERS (97-122)

function validate_alpha($str)
{
    $lower = strtolower($str);
    $missing = '';
    $valid = true;
    
    for ($i=97; $i <= 122 ; $i++) 
    { 
        // convert ascii value(int) to ascii character
        $char = chr($i);

        if (strpos($lower,$char) === false) //if char not found in string
        {
            $missing .= $char .' ';
            $valid = false;
        }
    }
    
    if ($valid) {
        echo 'VALID';
    }
    else {
        echo 'Missing character(s): '.$missing;
    }

}

validate_alpha('Michael Angelo Manaog');





