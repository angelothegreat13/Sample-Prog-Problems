<?php 

// Selection
// Swapping
// Counter Shift
function selection_sort($arr)  
{ 
	$len = count($arr);  

	for ($i=0; $i < $len; $i++) 
	{ 
    	$low = $i;

    	for ($j= $i + 1; $j < $len ; $j++) 
    	{ 
    		if ($arr[$j] < $arr[$low]) 
            { 
                $low = $j; 
            } 
    	}
    	
    	// swap the minimum value to $ith node 
        if ($arr[$i] > $arr[$low]) 
        { 
            $tmp = $arr[$i]; 
            $arr[$i] = $arr[$low]; 
            $arr[$low] = $tmp; 
        } 
	}
	
	return $arr;
}

// Find the minimum element in arr[0...4]
// and place it at beginning and repeat this process
$arr = array(64,25,12,22,11); 

$sorted_array = selection_sort($arr);

var_dump($sorted_array);

// Output the Sorted Array








  





