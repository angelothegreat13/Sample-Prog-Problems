<?php 

function second_highest_num($num)
{
    $max_1 = $num[0];
    $max_2 = $num[0];

    for ($i=0; $i < count($num); $i++) 
    { 
        /* 
            arr = [-1,-9,5,55,8,-1,3,-55,8,55];

            if num[i] > max1 
                max2 = max1
                max1 = num[i]

            elseif num[i] < max1 && num[i] > max2 
                max2 = num[i]            
        */
        if ($num[$i] > $max_1) {
            
            /* 
            [-1,-9,5,55,8,-1,3,-55,8,55];
            
            // -1 > -1 
            // -9 > -1
            5 > -1
            55 > 5
            // 8 > 55
            // -1 > 55
            // 3 > 55
            // -55 > 55
            // 8 > 55
            // 55 > 55

            max2 = -1 
            max2 = 5

            */
            $max_2 = $max_1;  

            /* 
            max1 = 5
            max1 = 55

            */
            $max_1 = $num[$i]; 
        }

        elseif ($num[$i] < $max_1 && $num[$i] > $max_2) {

            /* 
            // -1 < -1 && -1 > -1
            8 < 55 = true
            8 > 5 = true 

            // -1 < 55 = true
            // -1 > 8 = false
            
            // 3 > 8 = false
            // 3 < 55 = true
            // -55 < 55 = true

            // -55 > 8 = false
            
            // 8 < 55 = true
            // 8 > 8 = false
            
            // 55 < 55 = false
            // 55 > 8 = true

            max_2 = 8;
            */
            $max_2 = $num[$i]; 
        }
    }

    if ($max_2 == $max_1) {
        $max_2 = 'There is no Second Largest';
    }

    // echo $max_1 . ' '. $max_2;
    echo $max_2;
}

$num = [-1,-9,-5,55,-8,-1,-3,-55,-8,55];
// $num = [20,20,20];

second_highest_num($num);

function max_two(array $num)
{
    $numbers = array_unique($num);

    rsort($numbers);
    
    echo "Second Highest Number: " . $numbers[1];
}   


// $num = [-1,-9,5,55,8,-1,3,55];
// $num = [1,2,3,4,5,6,7,7,8,8,9,11,13];
// max_two($num);
