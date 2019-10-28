<?php 

function alternatingSums($a) 
{
    $t1 = 0;
    $t2 = 0;
    
    for ($i = 0; $i < sizeof($a); $i++) {
        
        if ($i & 1) {
            $t1 += $a[$i];
        }
        else {
            $t2 += $a[$i];
        }
    }

    return [$t2,$t1];

    print_r([
        't1' => $t1,
        't2' => $t2,
    ]);
}

$a = [50, 60, 60, 45, 70];
alternatingSums($a);