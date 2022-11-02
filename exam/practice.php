<?php
define('PI',3.14);
// print(PI);

function sample() {
    $numargs = func_num_args(); // get the total number of parameters
    echo "Number of arguments: $numargs\n";
}

// sample(1,2,3,4,5);

/* 
Super Global Variables in PHP
    - Some predefined variables in PHP are known as super global variables 
    because they are always accesible from any function, file or class 
    regardless of their scope.
They include - 
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

// $$variable is a reference variable of variables
function doubleVariable()
{
    $HELLO = 'Welcome my friend';
    $var = 'HELLO';
    echo $var.' '.$$var;
}
doubleVariable();

/* 
GET
- Sends data as part of page URL
- Not Secure
POST
- Sends data through HTTP header
- Secure
*/

/* 
    Final class in PHP means that the class cannot be extended
    A Final Method means that it cannot be overriden
*/