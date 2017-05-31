<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/31/17
 * Time: 11:41 AM
 */
$db = pg_connect( "host=localhost port=5432 dbname=sample-database user=maruf password=pass sslmode=disable"  );

if(!$db) {
    echo "Error : Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}

$sql =<<<EOF
      SELECT * from COMPANY;
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
    echo pg_last_error($db);
    exit;
}
while($row = pg_fetch_row($ret)) {
    echo "ID = ". $row[0] . "\n";
    echo "NAME = ". $row[1] ."\n";
    echo "ADDRESS = ". $row[2] ."\n";
    echo "SALARY =  ".$row[4] ."\n\n";
}
echo "Operation done successfully\n";
pg_close($db);