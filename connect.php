<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = testdb";
   $credentials = "user = postgres password=root";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   $result = pg_query($db, "SELECT * FROM invoice_2018_1_25_sec"
);
   $arr=pg_fetch_all($result);
   var_dump($arr);

?>
