<?php 

function parkingCost($timeIn, $timeOut) {

     $ti = explode(':',$timeIn);
    $to = explode(':',$timeOut);

    $tih = (int)$ti[0];
    $tim = (int)$ti[1];

    $toh = (int)$to[0];
    $tom = (int)$to[1];

   
    $toth = $toh - $tih; 
    $totm = $tom - $tim;
    $cost = 0;

    $dif_min = ($toth * 60) + $totm;

    if ($dif_min <= 30) {
        return 0;
    }

    $dif_min = $dif_min - 30;

    if ($dif_min <= 90) {
        return ceil($dif_min / 10) ;
    }

    $dif_min = $dif_min - 90;

    return ceil( ($dif_min / 10) * 2) + 1 + 9;
    
}
