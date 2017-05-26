<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:52 PM
 */

# Array length
$family = array("Fred", "Wilma", "Pebbles");
$size = count($family);
echo $size,"\n";


$confusion = array( 10 => "ten", 11 => "eleven", 12 => "twelve");
$size = count($confusion); # 3

print_r($confusion);
echo $size;



# Array Padding

$scores = array(5, 10);
$padded = array_pad($scores, 5, 0);
print_r($scores);
print_r($padded);

echo "\n\n";
$scores = array(5, 10);
$padded = array_pad($scores, −5, 0);
// $padded is now array(0, 0, 0, 5, 10);
print_r($scores);
print_r($padded);
