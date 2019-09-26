<?php 

#Write a program that takes 5 positive integers, then outputs the largest possible sum and smallest possible sum of any 3 #numbers in the array.

#I.E. given an array:
#int x[5] = {1, 5, 3, 9, 7}
#returns:

#Largest possible sum = 21
#Smallest possible sum = 9

function possible_sum()
{
    $num = [1, 5, 3, 9, 7,6];
    $max = 0;
    $large = [];
    $small = [];

    // sort the array
    sort($num);

    // highest numbers
    // get 3
    // get the sum
    
    // smallest numbers
    // get 3
    // get the sum

    for ($i=0; $i !=3 ; $i++) { 
        $large[] = $num[(count($num) - 1) - $i];
        $small[] = $num[$i];
    }

    
    echo "Largest possible sum = " . array_sum($large) ."\n";
    echo "Smallest possible sum = " . array_sum($small);
}


possible_sum();