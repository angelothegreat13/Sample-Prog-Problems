<?php 

$arr = [1,2,4,5,6,7,8];
$elem = 3;
$pos = 2;
$n = sizeof($arr);

for ($i = $n - 1; $i >= $pos; $i--) { 
    $arr[$i + 1] = $arr[$i];
}

$arr[$pos] = $elem;

print_r($arr);


