<?php 


function factorial($num)
{
    // n! = n * (n-1)
    if ($num === 0) {
        return 1;
    }

    return $num * factorial($num - 1);
}

$num = 6;

echo factorial($num);

function loop_factorial()
{   
    $num = 6;  
    $factorial = 1;  

    while ($num != 1) {
        $factorial = $factorial * $num;
        $num--;
    }

    // for ($x=$num; $x>=1; $x--)   
    // {  
    //     $factorial = $factorial * $x;
    // }  

    echo "\n".$factorial;  
}

loop_factorial();