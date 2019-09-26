<?php 


function remove_duplicate($arr)
{
    $len = count($arr); 
    
    // exit if the length is equal or less than 1
    if ($len <= 1) {
        exit('No need to remove Duplicate');
    }

    $j=0;

    for ($i=0; $i < $len - 1; $i++) 
    { 
        // If current element is not equal 
        // to next element then store that 
        // current element 
        if ($arr[$i] != $arr[$i + 1]) {
            $arr[$j++] = $arr[$i];
        }
    }

    $arr[$j++] = $arr[$len - 1]; 

    for ($i=0; $i < $j; $i++) { 
        echo $arr[$i].' ';
    }
    
    echo "\n".$j;
}

// Input  : arr[] = {2, 2, 2, 2, 2}
// Output : arr[] = {2}
//          new size = 1

// Input  : arr[] = {1, 2, 2, 3, 4, 4, 4, 5, 5}
// Output : arr[] = {1, 2, 3, 4, 5}
//          new size = 5

$arr = [1,1,2,2,3,4,4,4,4,5,6,7]; 

remove_duplicate($arr);

// 1,2,3,4,5,6,7
// 7








