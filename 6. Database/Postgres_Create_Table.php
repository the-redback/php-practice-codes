<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/31/17
 * Time: 11:37 AM
 */
$db = pg_connect( "host=localhost port=5432 dbname=sample-database user=maruf password=pass sslmode=disable"  );

if(!$db) {
    echo "Error : Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}

$sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
    echo pg_last_error($db);
} else {
    echo "Table created successfully\n";
}
pg_close($db);