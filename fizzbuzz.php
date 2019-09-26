<?php

/**
 * --- Directions
 * Write a program that console logs the numbers
 * from 1 to n. But for multiples of three print
 * “fizz” instead of the number and for the multiples
 * of five print “buzz”. For numbers which are multiples
 * of both three and five print “fizzbuzz”.
 *
 * -- Example
 *
 *   fizzBuzz(5);
 *   1
 *   2
 *   fizz
 *   4
 *   buzz
 */


// $a % $b	Modulo	Remainder of $a divided by $b.
// if $a is less than $b the output will be $a
function fizz_buzz($number)
{
	for ($i=1; $i <= $number; $i++) 
	{ 
		if ($i % 15 == 0) { //because 15 is mutiple by 3 && 5
	        echo 'FizzBuzz<br>';
	    } elseif ($i % 3 == 0) {
	        echo 'Fizz<br>';
	    } elseif ($i % 5 == 0) {
	        echo 'Buzz<br>';
	    } else {
	        echo $i . '<br>';
	    }
	}
}

fizz_buzz(15);

// echo 15 % 15 ;
// if (15 % 15 == 0) {
// 	echo 'FIZZBUZZ';
// }


