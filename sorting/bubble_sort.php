<?php 

function bubble_sort($arr)
{
    $n = sizeof($arr);
    
    for ($k = 0; $k < $n - 1; $k++) 
    {
        $swap = false;

        for ($i=0; $i < $n - $k - 1; $i++) { 

            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swap = true;
            }
        }
    
        if ($swap === false) {
            break;
        }
    }

    print_r($arr);
}

$arr = [5,6,2,7,13,2,1];

bubble_sort($arr);