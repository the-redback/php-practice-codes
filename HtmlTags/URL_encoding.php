<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 2:54 PM
 */

$name = "Programming PHP";
$output = rawurlencode($name);
echo "http://localhost/{$output}";

echo "\n\n";

$encoded = 'Programming%20PHP';
echo rawurldecode($encoded);