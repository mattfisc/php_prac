<?php



//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$test = "SELECT `Muscle` FROM `workout` WHERE 1";

// TEST
$list = $mysqli->query($test);


?>