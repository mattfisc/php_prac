<?php

// MEMBER INPUT
$input = $_GET['q'];
echo "Exercises for " .$input;
echo "<br>----------------<br>";

//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

 
 $test = "SELECT * FROM `workout` WHERE Muscle = '$input'";
//$test = "SELECT `Muscle` FROM `workout` WHERE Muscle = '$input'";
//$test = 'SELECT * FROM `workout` WHERE Muscle = "Calves"';

// TEST
//$result = $mysqli->query($test);


$result = mysqli_query($mysqli,"SELECT * FROM `workout` WHERE Muscle = '" .$input. "'" );

while($row = mysqli_fetch_array($result))
echo $row['Exercises'];




?>