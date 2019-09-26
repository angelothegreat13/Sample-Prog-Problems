<?php 


function same_element_naive($a,$b)
{
    $counter = 0;

    for ($i = 0; $i < sizeof($a); $i++) {

        for ($j = 0; $j < sizeof($b); $j++) {

            if ($a[$i] == $b[$j]) {
                $counter = $counter + 1;    
            }

        }

    }

    echo $counter;

}

$a = [1, 2, 3];
$b = [2, 3, 4];

/* Find the number of elements that are contained in both of the given arrays. 
   Output = 1
*/
same_element_naive($a,$b);