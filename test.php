<?php 

function max_char($str)
{
    $ASCII_SIZE = 256;
    $ASCII = [];
    $len = 0;
    $max = 0;

    // Create array to keep the count  
    // of individual characters and  
    // initialize the array as 0 or NULL
    for ($i=0; $i < $ASCII_SIZE; $i++) { 
        $ASCII[] = NULL;
    }

    // get the length of the string
    while (!empty($str[$len])) {
        $len++;
    }

    for ($i=0; $i < $len; $i++) 
    { 
        // ord() = return the ascii value of the first character
        
        // if ASCII at this particular character is greater than max
        // we are going to update the max and our max_char
        if ($ASCII[ord($str[$i])] > $max) {
            $max = $ASCII[ord($str[$i])];
            $max_char = $str[$i];
        }
       
        $ASCII[ord($str[$i])]++;
    }

    echo $max_char;
    
}

max_char('SAITTTTTTAAAAAAAAAAAAAAAAAAAAAAAAAAAMA');

// $array = [
//     0 => 0,
//     1 => 1,
//     2 => 2,
//     3 => 3,
//     4 => 4,
// ];


// echo ord($array[4]);

// var_dump($array);
