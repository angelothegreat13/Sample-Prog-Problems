<?php 


function distinct_array($arr)
{
    $len = count($arr);

    // Pick all elements one by one 
    for ($i=0; $i < $len; $i++) 
    { 
        // Check if the picked element is already printed 
        for ($j=0; $j < $len; $j++) { 

            if ($arr[$i] == $arr[$j]) {
                break;
            }
        }

        // If not printed earlier, then print it 
        if ($i == $j) {
            echo $arr[$i];
        }
    }
}       
    
$arr = [1,1,2,2,3,4,4,5,6,5,1,2,3,5];
distinct_array($arr);
