<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 12:54 PM
 */

$names = array("Fred", "Barney", "Wilma", "Betty");
function &findOne($n)
{
    global $names;

    return $names[$n];
}

print_r($names);

$person =&findOne(0);
$person = "Barnetta";

print_r($names);