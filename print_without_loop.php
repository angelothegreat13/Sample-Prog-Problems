<?php 

// Print numbers without loop using recursion
function print_numbers_without_loop($num)
{   
    // if ($start <= $end) {
    //     echo $start .' ';
    //     print_numbers_without_loop($start + 1,$end);
    // }
    // else {
    //     exit();
    // }

    // if ($num == 0) {
    //     exit();
    // }
    // else 
    // {
    //     echo 101 - $num .' ';
        
    //     print_numbers_without_loop($num - 1);
    // }

    if ($num != 0) {
        print_numbers_without_loop($num - 1);
        echo $num .' ';
    }
    
}


print_numbers_without_loop(100);