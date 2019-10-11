<?php 

$arr = [1,2,3,4,5,6,7,8,9,10];
$n = sizeof($arr);
$pos = 2; //position to delete

for ($i = $pos; $i < $n - 1; $i++) 
{
    $arr[$i] = $arr[$i + 1];
}

$n = $n - 1;

for ($j=0; $j < $n; $j++) { 
    echo $arr[$j]." ";
}