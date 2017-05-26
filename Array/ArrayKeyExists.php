<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 4:07 PM
 */

$person['age'] = 0; // unborn?
if ($person['age']) {
    echo "true!\n";
}
if (array_key_exists('age', $person)) {
    echo "exists!\n";
}

# 1st one returns nothing