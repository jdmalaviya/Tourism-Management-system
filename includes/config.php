<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','id8736146_localhost');
define('DB_PASS','localhost');
define('DB_NAME','id8736146_lcocalhosa');
 //Establish database connection.
 try
 {
 $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
 }
 catch (PDOException $e)
 {
 exit("Error: " . $e->getMessage());
 }


?>