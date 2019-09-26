<?php 

// Have the function TimeConvert(num) take the num parameter being passed and return the number of hours and minutes the parameter converts to (ie. if num = 63 then the output should be 1:3). Separate the number of hours and minutes with a colon. 

// Input:126
// Output:2:6

// Input:45
// Output:0:45
function time_convert($num)
{
    // Must return Hours and Minutes
    // Seperate the Hours and Minutes by semi colon

    $hours = $num / 60;
    $minutes = $num % 60;
    
    echo (int)$hours.':'.$minutes;
}


time_convert(126);