<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 3:45 PM
 */

$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
print_r($bits);