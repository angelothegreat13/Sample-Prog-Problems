<?php 

function selection_sort($arr)
{
    $n = sizeof($arr);

    for ($i = 0; $i < $n - 1; $i++) 
    {
        $iMin = $i;

        for ($j = $i + 1; $j < $n; $j++)
        {
            if ($arr[$j] < $arr[$iMin]) {
                $iMin = $j;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$iMin];
        $arr[$iMin] = $temp;
    }

    print_r($arr);
}

$arr = [5,6,2,7,13,2,1];

selection_sort($arr);