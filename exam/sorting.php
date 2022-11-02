<?php

function bubble_sort()
{
    $arr = [10,8,13,-1,0,-2,2,3];
    $n = sizeof($arr);

    for ($i=0; $i < $n; $i++) { 
        for ($j=0; $j < $n - 1; $j++) { 
            if ($arr[$j] > $arr[$j + 1]) { 
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    print_r($arr);
}

// bubble_sort();

function simple_sort()
{
    $arr = [10,8,13,-1,0,-2,2,3];
    $n = sizeof($arr);

    for ($i=0; $i < $n; $i++) { 
        for ($j=$i+1; $j < $n; $j++) { 
            if ($arr[$j] < $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    print_r($arr);
}

// simple_sort();

function selection_sort()
{
    $arr = [9,100,3,-1,0,89,2];
    $n = sizeof($arr);

    for ($i=0; $i < $n; $i++) 
    { 
        $min = $i;

        for ($j = $i + 1; $j < $n; $j++) { 
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        if ($arr[$i] > $arr[$min]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }
    
    print_r($arr);
}

// selection_sort();
function insertion_sort()
{

}

function max_occurence()
{
    $string = 'Lorem ipsum dolor sit amet';
    $string = str_replace(' ', '', $string);
    $n = strlen($string);

    $marker = [];
    for ($i=0; $i < $n; $i++) 
    { 
        if (isset($marker[$string[$i]])) {
            $marker[$string[$i]] += 1;       
        } else {
            $marker[$string[$i]] = 1;
        }
    }

    $max = 0;
    $maxOcc = [];
    foreach ($marker as $key => $mark) {
        if ($mark >= $max) {
            $max = $mark;
            // $maxOcc[$key] = $mark; 
        }
    }

    print($max);
}

max_occurence();