<?php 

function repeat_str_num_times($str,$num)
{
    $repeated_str = '';

    if ($num > 0) {
        
        $i = 0;

        while ($i < $num) {
            $repeated_str.= $str;
            $i++;    
        }
    }
    
    echo $repeated_str;

}

repeat_str_num_times('abc',5);