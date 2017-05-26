<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 10:45 AM
 */

$what = "Fred";
echo "$what \n";

$what = 35;
echo "$what \n";

$what = array("Fred", 35, "Wilma");

foreach ($what as $wh)
{
    echo "$wh ";
    if(is_int($wh))
        echo "int \n";
    if(is_string($wh))
        echo "string \n";
}
