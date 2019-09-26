<?php 

// Scan the whole array
// Select the lowest 
// Swap 
// Repeat
function selection_sort($arr)
{
    $n = sizeof($arr);

    for ($i = 0; $i < $n - 1; $i++) {

        $iMin = $i; //0

        for ($j = $i + 1; $j < $n; $j++) 
        {
            if ($arr[$j] < $arr[$iMin]) {
                $iMin = $j; // minimum value
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$iMin];
        $arr[$iMin] = $temp;
    }

    print_r($arr);
}

$arr = [6,3,1,2,0,10,4];

selection_sort($arr);
