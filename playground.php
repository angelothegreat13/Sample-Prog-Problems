<?php 

$arr1 = [1,2,3];
$arr2 = [6,7,8];


for ($i = 0; $i < sizeof($arr1); $i++) {

    // echo 'arr1: '. $arr1[$i]."\n";

    for ($j = 0; $j < sizeof($arr2); $j++) { 
        // echo 'arr2: '. $arr2[$j]."\n";
        if ($arr1[$i] != $arr2[$j]) {
            echo $arr1[$i].' '.$arr2[$j]."\n";
        }

    }
    
}