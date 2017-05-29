<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:38 PM
 */

$large="adasd,asdasd,asdasd,asdasd";
$pos = strpos($large, ","); // find first comma
echo $pos,"\n";
$pos = strpos($large, 44); // also find first comma
echo $pos,"\n";


# strrpos() function finds the last occurrence of a character in a string
$record = "Fred,Flintstone,35,Wilma";
$pos = strrpos($record, ","); // find last comma
echo("The last comma in the record is at position {$pos}\n");

$record = "Fred,Flintstone,35,Wilma";
$rest = strstr($record, ",");
echo $rest,"\n";