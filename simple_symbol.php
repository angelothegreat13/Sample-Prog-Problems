<?php 

// Have the function SimpleSymbols(str) take the str parameter being passed and determine if it is an acceptable sequence by either returning the string true or false. The str parameter will be composed of + and = symbols with several characters between them (ie. ++d+===+c++==a) and for the string to be true each letter must be surrounded by a + symbol. So the string to the left would be false. The string will not be empty and will have at least one lette

// Input:"+d+=3=+s+"
// Output:true
// Input:"f++d+"
// Output:false
function simple_symbol($str)
{
    $str = '='.$str.'=';

    for ($i=0; $i < strlen($str); $i++) { 

        if (preg_match("/^[a-zA-Z]$/", $str[$i])) {
            if (($str[$i - 1] !== '+') || ($str[$i + 1] !== '+')) {
                return false;
            }
        }
    }

    return true;
}

var_dump( simple_symbol('+d+=3=+s+') );


