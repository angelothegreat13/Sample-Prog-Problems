<?php 

function unique_combination($arr1,$arr2)
{
    $output = '';
    $counter = 0;
    
    for ($i=0; $i < count($arr1); $i++) 
    { 
        for ($j=0; $j < count($arr2); $j++) 
        { 
            if ($arr1[$i] != $arr2[$j]) {
                $output .= $arr1[$i].' '.$arr2[$j] ."\n";
                $counter++;
            }
        }
    }

    echo $output ."\n";
    echo 'Total Unique Combination: '. $counter;
}

$arr1 = [1,2,3,4];
$arr2 = [1,2,4,5];
unique_combination($arr1,$arr2);