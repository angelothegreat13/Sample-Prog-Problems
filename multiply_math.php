<?php 

function multiplication_table($num,$limit)
{
	for ($i=1; $i <= $limit; $i++) { 
		echo $num .' x ' . $i . ' = ' . $num*$i."\r\n";
	}
}

echo multiplication_table(2,15);