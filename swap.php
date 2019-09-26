<?php 
$firstNum = 12345;
$secondNum = 6789;

// a = a - b
// b = b + a
// a = b -a
$firstNum = $firstNum - $secondNum;
$secondNum = $secondNum + $firstNum;
$firstNum = $secondNum - $firstNum;

echo 'First Number: '.$firstNum.'<br>';
echo 'Second Number: '.$secondNum;