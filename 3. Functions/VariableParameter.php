<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 1:01 PM
 */

function countList()
{
    if (func_num_args() == 0) {
        return false;
    }
    else {
        $count = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            $count += func_get_arg($i);
        }
        return $count;
    }
}

echo countList();
# output will be NULL. bcoz, in PHP NULL is false
echo "\n";
echo countList(1, 5, 9);
