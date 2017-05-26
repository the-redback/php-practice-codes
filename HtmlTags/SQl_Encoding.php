<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 2:56 PM
 */

$baseUrl = 'http://www.google.com/q=';
$query = 'PHP sessions -cookies';
$url = $baseUrl . urlencode($query);
echo $url;