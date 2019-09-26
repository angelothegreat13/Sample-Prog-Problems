<?php 

function max_char($str)
{	
	$ASCII_SIZE = 256; //256 Distinct Characters
    $len = 0;

	// Create array to keep the count of individual characters and initialize the array as 0 
    $count = array_fill(0, $ASCII_SIZE, NULL);  //use 0 or NULL
  

    // Construct character count array  
    // from the input string.  
    // $len = strlen($str);  
    
    // count the string characters
    while (!empty($str[$len])) {
        $len++;
    }
    
    $max = 0; // Initialize max count  
  
    // Traversing through the string  
    // and maintaining the count of  
    // each character  
    for ($i = 0; $i < $len; $i++)  
    {  
    	// ord = return the ascii value of the first character
        
        if ($max < $count[ord($str[$i])])  
        {  
            $max = $count[ord($str[$i])];  
            $result = $str[$i];  
        }  
        else {
            $count[ord($str[$i])]++;  
        }
    }  

	return $result;
}

echo max_char('MMMMMMMMMMMMMMMMMMMMMMMMMMMICHAEKKKKKKKK');



