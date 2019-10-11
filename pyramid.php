<?php 

$rows = 3;

for ($i = 1; $i <= $rows; $i++) 
{ 
    for ($s = 1; $s <= $rows - $i; $s++) { 
        echo " ";
    }
    
    $k = 0;

    while ($k != 2*$i-1) {
        echo "*";
        $k++;
    }

    echo "\n";
}

// echo $k;