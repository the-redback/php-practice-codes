<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:57 PM
 */

$row0 = array(1, 2, 3);
$row1 = array(4, 5, 6);
$row2 = array(7, 8, 9);
$multi = array($row0, $row1, $row2);

$value = $multi[2][0];
echo("The value at row 2, column 0 is {$multi[2][0]}\n");