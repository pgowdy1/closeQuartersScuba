<?php

$host = "mysql.eecs.ku.edu";  // Change this to your host name.  It may be localhost
$username = "pgowdy"; // Changes this to your database username
$password = "Password123!"; // Changes this to your database password
$database = "pgowdy"; // Change this to your database name

$conn = mysql_connect($host, $username, $password) or die  ( mysql_error() );
$database = mysql_select_db($database, $conn) or die ( mysql_error() );

?>