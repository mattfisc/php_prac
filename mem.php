<?php

// MEMBER INPUT
$input = $_GET['q'];
echo "Exercises for " .$input;
echo "<br>----------------<br>";

$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

 
 $test = "SELECT * FROM `workout` WHERE Muscle = '$input'";


$result = mysqli_query($mysqli,"SELECT * FROM `workout` WHERE Muscle = '" .$input. "'" );
 
// working display
// STRING OF EXERCISES
// while($row = mysqli_fetch_array($result)){
//   echo $row['Exercises'];
// }

while($row = mysqli_fetch_array($result)){
  echo "<ul>";
  echo "<li>". $row['Exercises']. "</li>";
  echo "</ul>";





?>