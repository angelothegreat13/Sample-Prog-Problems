<?php 


function recursion_test($end)
{
    $i = 1;

    if ($i == 100) {
        exit();
    }
    else {
        echo $i;
    }
    

    // recursion_test();
}

recursion_test();