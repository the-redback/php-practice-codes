<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 9:53 AM
 */

$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";
$creator['Light bulb'] = "Edison";
$creator['Rotary Engine'] = "Wankel";
$creator['Toilet'] = "Crapper";

##Similar as,

//$person = array("Edison", "Wankel","crapper");
//$creator = array('Light bulb' => "Edison",
//    'Rotary Engine' =>"Wankel",
//    'Toilet' =>"Crapper");


foreach ($person as $name) {
    echo "{$name}\n";
}
foreach ($creator as $invention => $inventor) {
    echo "{$inventor} created the {$invention}\n";
}


asort($person);

# $person is now array("Crapper", "Edison", "Wankel");

asort($creator);

# $creator is now array('Toilet'=> "Crapper",
#                       'Light bulb' => "Edison",
#                       'Rotary Engine' => "Wankel");


echo "\n\n";

foreach ($person as $name) {
    echo "{$name}\n";
}
foreach ($creator as $invention => $inventor) {
    echo "{$inventor} created the {$invention}\n";
}

##Sort not good for array like $creator
sort($creator);

echo "\n\n";

foreach ($creator as $invention => $inventor) {
    echo "{$inventor} created the {$invention}\n";
}

var_dump($creator);
print_r($creator);