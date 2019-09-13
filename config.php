<?php
//define constants for connection info
define("HOSTNAME","localhost");
define("MYSQLUSER","ictatjcu_linfox");
define("MYSQLPASS","123zxc");

define("MYSQLDB","ictatjcu_linfox");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
}
?>
