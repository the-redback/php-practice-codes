<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/31/17
 * Time: 11:39 AM
 */
$db = pg_connect( "host=localhost port=5432 dbname=sample-database user=maruf password=pass sslmode=disable"  );

if(!$db) {
    echo "Error : Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}

$sql =<<<EOF
      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (1, 'Paul', 32, 'California', 20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
    echo pg_last_error($db);
} else {
    echo "Records created successfully\n";
}
pg_close($db);