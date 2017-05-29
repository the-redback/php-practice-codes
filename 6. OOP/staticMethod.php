<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/29/17
 * Time: 1:02 PM
 */

class HTMLStuff
{
    static function startTable()
    {
        echo "start table";
    }

    static function endTable()
    {
        echo "End table";
    }
}

HTMLStuff::startTable();
HTMLStuff::endTable();