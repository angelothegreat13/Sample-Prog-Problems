<?php

function group_by_name($arr)
{
    $result = [];

    foreach ($arr as $key => $val)
    {
        if (isset($result[$val])) {
            $result[$val] .= ', '.$key;
        }
        else {
            $result[$val] = $key;
        }    
    }

    print_r($result);
}

$arr = [
    'index.php' => 'randy',
    'robots.txt' => 'randy',
    'person.json' => 'susan'
];

group_by_name($arr);