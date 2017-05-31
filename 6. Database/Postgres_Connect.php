<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/31/17
 * Time: 9:44 AM
 */
$db = pg_connect( "host=localhost port=5432 dbname=sample-database user=maruf password=pass sslmode=disable"  );

if(!$db) {
    echo "Error : Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}

