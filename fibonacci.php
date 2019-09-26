<?php 

// F (1) = 1, 1, 2, 3, 5, 8, 13, 21, 34

function fibonacci($num)
{   
    // using recursive function
    if ($num == 0) {
        return 0;
    }
    if ($num == 1) {
        return 1;
    }
    else {
        return fibonacci($num - 1) + fibonacci($num -2);
    }
}

$term = 10;

for ($i=0; $i < $term; $i++) { 
    echo fibonacci($i).' '; 
}

function loop_fibonacci($term)
{
    $num1 = 0;
    $num2 = 1;
    $output = 0;
    
    $i = 1;

    while ($i <= $term) 
    {
        $output = $num1 + $num2;
        $num1 = $num2;
        $num2 = $output;
        echo $output.' ';
        $i++;
    }

}

// loop_fibonacci(10);
