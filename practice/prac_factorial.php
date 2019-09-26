<?php 

function factorial($num)
{
    $factorial = 1;

    for ($i=1; $i <= $num; $i++) { 
        $factorial *= $i; 
    }

    echo $factorial."\n";
}

factorial(8);


function recursive_factorial($num)
{
    if ($num == 0) {
        return 1;
    }
    
    return $num * recursive_factorial($num - 1) ;
}

echo recursive_factorial(8);