<?php 


// Selection Sort
function selection_sort(array $num)
{   
    $len = count($num);

    for ($i=0; $i < $len; $i++) 
    { 
        $low = $i;

        for ($j = $i+1; $j < $len; $j++) 
        {
            if ($num[$j] < $num[$low]) {
                $low = $j;
            }
        }

        $temp = $num[$low];
        $num[$low] = $num[$i];
        $num[$i] = $temp;
    }

    var_dump($num);

}

selection_sort([10,9,9,87,46,25]);