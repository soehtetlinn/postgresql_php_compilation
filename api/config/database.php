<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "testdb";
    private $username = "postgres";
    private $password = "root";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;
 	$db = pg_connect("$host $port $db_name $username $password");
	if(!$db){
	   echo"Error : Unable to open database\n";
	} else {
	   echo "Opened Database successfully\n";
 	}
    }
}
?>

