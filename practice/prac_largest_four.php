<?php 

function largest_four($arr)
{
    $arr_len = sizeof($arr);
    $max_four = [];
    $second_max_four = [];

    for ($i = 0; $i < $arr_len; $i++) 
    {
        $arr_i_len = sizeof($arr[$i]);
        $highest = $arr[$i][0];
        $second_highest = $arr[$i][0];

        for ($j = 0; $j < $arr_i_len; $j++) {
            
            $current = $arr[$i][$j];

            if ($current > $highest) {
                $second_highest = $highest;
                $highest = $current;
            }
            elseif ($current < $highest && $current > $second_highest) {
                $second_highest = $current;
            }

        }

        $max_four[] = $highest;
        $second_max_four[] = $second_highest;
    }

    print_r($max_four);
    print_r($second_max_four);
}

$arr = [
    [4,5,1,3], //5
    [1,4,7,9], //9
    [5,6,2,8], //8
    [1,7,8,2] //8
];

largest_four($arr);


