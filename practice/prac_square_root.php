<?php 
/* 
Coding challenge:

Create a function that computes the square root of a number.

Limitations:

1) Cannot use built-in square root functions from standard libraries. (No cheating!)
2) You may only use if statements as conditions. No do, do while, for, and switch statements.
3) Any language is allowed.
4) Shortest code preferred, but it needs to be descriptive and easy to read.
5) Faster code preferred, measured by average execution time (five random floating-point integers, two small three large, average of execution time).

Tignan natin kung sino ang pinaka-magaling mag-analyze.

EDIT:

Note that the datatype is float.

Dapat pag nagpakuha ako ng square root of 3, makikita ko ang 1.73205080757.
*/

function square_root($num)
{
    $num = ($num / 2) * ($num * 2);   

    echo $num;
}

square_root(3);