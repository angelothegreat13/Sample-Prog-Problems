<?php 
/* 
Let's make the weekend fun, so here's another coding challenge.

Given a semiprime (the product of two prime numbers), write a function that will compute for its two prime factors.

Test cases:
1) Input: 15
Output: 3, 5
2) Input: 39203
Output: 197, 199
3) Input: 999797
Output: 433, 2309
4) Input: 9180851
Output: 3023, 3037
5) Input: 10967535067
Output: 104723, 104729

Bonus test case:
Input: 817802685333297529116403
Output: 904324435921, 904324435843
Bonus points to those who can come up with a linear solution.
*/

function two_prime_factors($num)
{
    if ($num % 1) {
        echo 'Not Prime';
    }
    else {
        echo 'Prime';
    }

}

two_prime_factors(89);
