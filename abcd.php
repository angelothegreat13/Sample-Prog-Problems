<?php 

function abcd()
{

    foreach (range(100000, 1000000) as $tal1) {
        
        $tal2 = $tal1 * 4;
        $tal2str = (string)$tal2;
        $tal2bstr = strrev($tal2str);
        $tal2b = (int)$tal2bstr;

        if ($tal1 == $tal2b) {
            echo $tal2;
        }

    }

}

abcd();



