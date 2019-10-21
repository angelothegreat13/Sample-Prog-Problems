<?php 

/* 
Find the first duplicate number for which the second occurrence has the minimal index
*/
function first_duplicate($arr)
{
    $n = sizeof($arr);
    $first_duplicate = -1;

    for ($i = $n - 1; $i > 0; $i--) {
        
        for ($j = $i - 1; $j >= 0; $j--) {

            if ($arr[$i] == $arr[$j]) {
                $first_duplicate = $arr[$i];
                break;
            }

        }
    }

    echo $first_duplicate;
}


// $arr = [2, 1, 3, 5, 3, 2]; //3
// $arr = [2,2];
// $arr = [5, 5, 5, 5, 5];
// $arr = [2, 3, 3];
// $arr = [8, 4, 6, 2, 6, 4, 7, 9, 5, 8];
$arr = [1, 1, 2, 2, 1]; //1
first_duplicate($arr);
