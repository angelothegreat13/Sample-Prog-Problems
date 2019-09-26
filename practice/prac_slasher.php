<?php 

function slasher($arr,$num)
{
    $slash = [];
    $arr_len = sizeof($arr);

    for ($i = 0; $i < $arr_len; $i++) {

        if ($num != $arr_len ) {
            $slash[] = $arr[$num];
            $num++;
        }

    }

    print_r($slash);
}

$arr = ['Burger','Fries','Shake','Banana','Cucumber'];
// $arr = [1,2,3,4,5];
slasher($arr,2);