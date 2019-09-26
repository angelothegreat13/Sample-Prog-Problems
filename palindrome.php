<?php 

// --- Directions
// Given a string, return true if the string is a palindrome
// or false if it is not.  Palindromes are strings that
// form the same word if it is reversed. *Do* include spaces
// and punctuation in determining if the string is a palindrome.
// --- Examples:
//   palindrome("abba") === true "abba"
//   palindrome("abcdefg") === false "gfedcba"

function palindrome($string)
{
    $reversed = "";
    $i = 0;

    while (!empty($string[$i])) {
        $reversed = $string[$i] . $reversed;
        $i++;
    }

    if ($reversed == $string) {
        echo "This String is a Palindrome";
    }
    else { 
        echo "This String is not a Palindrome";
    }

}

palindrome('abba');