<?php 

function title_case($sen)
{
    $title_case = "";
    $sen = preg_split('/[\s]/',$sen);

    for ($i = 0; $i < count($sen); $i++) {
        $upperChar = strtoupper($sen[$i][0]);
        $title_case .= str_replace( $sen[$i][0],$upperChar,$sen[$i] ).' ';
    }

    echo $title_case;
}

title_case("I'm a little tea pot");



