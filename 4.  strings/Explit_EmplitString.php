<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:32 PM
 */

$input = 'Fred,25,Wilma';
$fields = explode(',', $input);
// $fields is array('Fred', '25', 'Wilma')

print_r($fields);


$fields = array('Fred', '25', 'Wilma');
$string = implode(',', $fields);

print_r($string);