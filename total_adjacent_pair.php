<?php 

function total_adjacent_pair($num)
{
    $total = 0;
    $len = count($num);

    for ($i=0; $i < $len - 1; $i++) 
    { 
        // Check if the current position is equal to next position   
        if ($num[$i] == $num[$i + 1] && ($i == $len - 2 || $num[$i] != $num[$i + 2])) {
            $total++;
        }   
    }


    // i = 1
    //  if (arr[i] == arr[i-1] && (i == arr.length-1 || arr[i] != arr[i+1])) {
    
    echo $total;
}

$num = [10,10,1,1,2,2,2,1,1,1,2,2];
total_adjacent_pair($num);