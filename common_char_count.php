<?php 

function common_char_count($s1,$s2)
{
    $s1n = strlen($s1);
    $s2n = strlen($s2); 
    $c = 0;
    
    $visited = array_fill(0,$s2n,false);

    for ($i = 0; $i < $s1n; $i++) {
        
        for ($j = 0; $j < $s2n; $j++) {

            if ($visited[$j] == true) {
                continue;
            }

            if ($s1[$i] == $s2[$j]) {
                $visited[$j] = true; 
                $c++;
                break;
            }
        }
    }

    echo $c;
}

$s1 = "abca"; 
$s2 = "xyzbac";

common_char_count($s1,$s2);
