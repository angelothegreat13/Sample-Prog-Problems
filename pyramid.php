<?php 

echo "<center>";

// Increment i 
for ($i=0; $i < 20 ; $i++) { 

	// Increment j to i 
	for ($j=0; $j < $i; $j++) { 
		// Display character
		echo "*";
	}

	// Add a Break or new Line
	echo "\n";
}
echo "</center>";
