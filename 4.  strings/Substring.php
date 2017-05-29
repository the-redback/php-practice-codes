<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:14 PM
 */
# $piece = substr(string, start [, length ]);
$name = "Fred Flintstone";
$fluff = substr($name, 6, 4); // $fluff is "lint"
$sound = substr($name, 11);// $sound is "tone"

echo $fluff,"  ",$sound,"\n\n";

# To learn how many times a smaller string occurs in a larger one, use substr_count() :
# $number = substr_count(big_string, small_string);

$sketch = <<< EndOfSketch
Well, there's egg and bacon; egg sausage and bacon; egg and spam;
egg bacon and spam; egg bacon sausage and spam; spam bacon sausage
and spam; spam egg spam spam bacon and spam; spam sausage spam spam
bacon spam tomato and spam;
EndOfSketch;
$count = substr_count($sketch, "spam");
print("The word spam occurs {$count} times.");


# The substr_replace() function permits many kinds of string modifications:
# $string = substr_replace(original, new, start [, length ]);

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 7);
# $farewell is "good bye citizen"
echo $farewell,"\n\n";


# length of 0 to insert without deleting:
$farewell = substr_replace($farewell, "kind ", 9, 0);
# $farewell is "good bye kind citizen"
echo $farewell,"\n\n";

# "" to delete without inserting:
$farewell = substr_replace($farewell, "", 8);
# $farewell is "good bye"
echo $farewell,"\n\n";


# insert at the beginning of the string:
$farewell = substr_replace($farewell, "now it's time to say ", 0, 0);
// $farewell is "now it's time to say good bye"'
echo $farewell,"\n\n";


# A negative value for start indicates the number of characters from the end of the string from which to start the replacement:
$farewell = substr_replace($farewell, "riddance", -3);
// $farewell is "now it's time to say good riddance"
echo $farewell,"\n\n";


# A negative length indicates the number of characters from the end of the string at which to stop deleting:
$farewell = substr_replace($farewell, "", -8, -5);
// $farewell is "now it's time to say good dance"
echo $farewell,"\n\n";

$record = "Fred,Flintstone,35,Wilma";
$rest = strstr($record, ",");
echo $rest,"\n";