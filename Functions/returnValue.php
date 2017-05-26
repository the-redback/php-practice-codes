<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 1:05 PM
 */


function returnOne(){
    return 42;
}

function returnMultiple(){
    return array("My Cgpa",4.00);
}
echo "1st call: ";
print_r(returnOne());

echo "\n2nd call:";
print_r(returnMultiple());