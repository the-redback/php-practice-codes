<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 11:14 AM
 */

$bigLongVariableName ="PHP";
$short=& $bigLongVariableName;
$bigLongVariableName .=" Rocks";
echo "\$short is $short \n";

echo "\$bigLongVariableName is $bigLongVariableName\n";


$short = "Programming $short";
print "\n\n\$short is $short\n";
print "Long is $bigLongVariableName\n";

$listing = `ls -ls /tmp`;
echo $listing;