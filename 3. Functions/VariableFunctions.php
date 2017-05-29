<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 1:10 PM
 */

function first(){
    echo "First";
}

function second(){
    echo "second";
}

function third(){
    echo "third";
}

$which="first";

$which();

$which="third";

$which();
