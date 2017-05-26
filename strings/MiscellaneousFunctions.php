<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:25 PM
 */

# String reverse
echo strrev("There is no cabal"),"\n";


# string repeated count times
echo str_repeat('_.-.', 40),"\n";



# The optional third argument is the string to pad with:
$string = str_pad('Fred Flintstone', 30, '.');
echo "{$string}35","\n";


echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_LEFT) . "]\n";
echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_BOTH) . "]\n";