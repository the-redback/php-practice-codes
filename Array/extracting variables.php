<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/29/17
 * Time: 10:00 AM
 */

$shape = "round";
$array = array('cover' => "bird", 'shape' => "rectangular");

extract($array, EXTR_PREFIX_ALL, "book");

echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";