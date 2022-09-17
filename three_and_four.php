<?php 
function threeAndFour($n) 
{
    $sorted = [];
    
    for ($i=$n; $i >= 0; $i--) {
        if ($i % 3 == 0 && $i % 4 == 0) {
            $sorted[] = $i;
        }
    }
    
    sort($sorted);
    
    print_r($sorted);
}

threeAndFour(30);