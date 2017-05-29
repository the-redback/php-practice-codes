<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:58 PM
 */

$person = array("Fred", 35, "Betty");
list($name, $age, $wife) = $person;

print_r($person);
echo $name,"\n",$age,"\n",$wife,"\n";


# Slicing 5. Array

$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
$middle = array_slice($people, 2, 2); // $middle is array("Harriet", "Brenda")
print_r($middle);


# Combine array_slice() with list() to extract only some values to variables:

$order = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
list($second, $third) = array_slice($order, 1, 2); // $second is "Dick", $third is "Harriet"
echo $second," ",$third,"\n";

# array to 2D array
$nums = range(1, 7);
$rows = array_chunk($nums, 3);
print_r($rows);



# 5. Array Of keys
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$keys = array_keys($person); // $keys is array("name", "age", "wife")
print_r($person);
print_r($keys);

$values = array_values($person); // $values is array("Fred", 35, "Wilma");
print_r($values);



### 5. Array splices

$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
print_r($subjects);
$removed = array_splice($subjects, 2, 3);
// $removed is array("math", "bio", "cs")
// $subjects is array("physics", "chem", "drama", "classics")
print_r($subjects);


$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
$new = array("law", "business", "IS");
array_splice($subjects, 4, 3, $new);
// $subjects is array("physics", "chem", "math", "bio", "law", "business", "IS")
