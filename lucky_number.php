<?php 


// Error
function lucky_number($num)
{
    $is_lucky_number = true;
    $num = (string) $num;

    for ($i = 1; $i < strlen($num); $i++) {


        if ($num[0] == 4 || $num[0] == 7) {

            if ($num[$i] != $num[0]) {
                $is_lucky_number = false;
                break;
            }
        }

    }

    return $is_lucky_number;
}

$num = 7777777;

var_dump( lucky_number($num) );