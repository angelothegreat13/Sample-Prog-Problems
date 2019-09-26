<?php 

function confirm_ending($str,$target)
{
    if (substr($str, -strlen($target)) === $target ) {
        echo 'True';
    }
    else {
        echo 'False';
    }
}

confirm_ending('MichaelAngeloManaog','s');




