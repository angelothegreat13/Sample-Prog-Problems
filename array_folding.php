<?php

function arrayFolding($a) {
    
    sort($a);

    $fold = 0;
    $n = sizeof($a);
    $sum = 0;
    
       

    for ($i = 0; $i < sizeof($a); $i++) {
    }

    echo $fold;
    // print_r($a);    
}

// 1 + 2 = 3 
// [3,3] = 3 * 3 = 9
$a = [1, 3, 2];
arrayFolding($a);
