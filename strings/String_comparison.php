<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 2:59 PM
 */

$o1 = 3;
$o2 = "3";
if ($o1 == $o2) {
    echo("== returns true \n");
}
if ($o1 === $o2) {
    echo("=== returns true \n");
}

$o1 = 3.0;
$o2 = "3.0";
if ($o1 == $o2) {
    echo("== returns true \n");
}
if ($o1 === $o2) {
    echo("=== returns true \n");
}

