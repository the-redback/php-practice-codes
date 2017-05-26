<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 10:53 AM
 */

$foo = "bar";
$$foo = "baz";

echo "$foo $bar";

# makes $bar variable.
# $foo="bar"
# $bar="baz"