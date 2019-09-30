<?php 

// Process 1 Using For Loop
function reverse_string($string)
{
	// Declare an empty string variable
	$reversed = "";

	// Count the length of the string

	// Increment the the i to te length of the string 
	for ($i=0; $i < strlen($string); $i++) { 
		
		/* 
			str[i] = h . ''; = h
			str[i] = e . 'h' = eh
			str[i] = l . 'eh' = leh
		*/
		$reversed = $string[$i] . $reversed;
		// echo $reversed."\n";
	}

	// echo $reversed;
	// return $reversed;
}

reverse_string('Hello');


function string_reverse($string) 
{
	$reversed = '';

	for ($i = strlen($string) - 1; $i > 0; $i--) {
		$reversed .= $string[$i];
	}
	
	echo $reversed;

}

string_reverse('Michael Angelo Manaog');



