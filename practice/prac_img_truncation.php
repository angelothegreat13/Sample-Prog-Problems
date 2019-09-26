<?php 

function img_truncation($image,$threshold) 
{
    for ($i = 0; $i < sizeof($image); $i++) {

        for ($j = 0; $j < sizeof($image[$i]); $j++) {
            
            if ($image[$i][$j] > $threshold) {
                $image[$i][$j] = $threshold;
            }

        }

    }

    print_r($image);
}

$image = [
    [0, 100, 100], 
    [1, 255, 103]
];


$threshold = 102;

img_truncation($image,$threshold);
