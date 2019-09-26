<?php 


function count_freq($arr)
{   
    $visited = [];
    $len = count($arr);

    // set all the arr element to visited = false
    for ($i=0; $i < $len; $i++) { 
        $visited[] = false;
    }
    
    // Traverse through array elements and 
    // count frequencies 
    for ($i=0; $i < $len; $i++) 
    { 
        // Skip this element if already processed 
        if ($visited[$i] == true) {
            continue;
        }

        $count = 1; 
        for ($j = $i + 1; $j < $len; $j++) { 
            if ($arr[$i] == $arr[$j]) { 
                $visited[$j] = true; 
                $count++; 
            } 
        } 

        echo $arr[$i] . " " . $count ."\n";
    }
}

$arr = [10, 20, 20, 10, 10, 20, 5, 20];

count_freq($arr);

