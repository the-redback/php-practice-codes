<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 2:28 PM
 */

# Removing whitespace
$title = "    Programming PHP   \n";

$str1 = ltrim($title);
$str2 = rtrim($title);
$str3 = trim($title);

// $str1 is "Programming PHP ";
// $str2 is "Programming PHP";
// $str3 is "Programming PHP";

echo str1,str2,str3;