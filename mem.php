<?php

// MEMBER INPUT
$input = $_GET['q'];

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


// GET EXERCISES

// STORE IN ARRAY
$arr = mysqli_fetch_array($result);
$string = $arr['Exercises'];


// PRINT EXERCISES STRING
//echo $string;

$str_arr = preg_split ("/\,/", $string);  

// ARRAY LENGTH
$length = count($str_arr);


// DISPLAY EXERCISES
echo "<p class=title>Exercises for " .$input. "</p>";


echo "<ul>";
for($i = 0;$i < $length; $i++){
  echo "<li>".$str_arr[$i]."</li>";
}
echo "</ul>";

?>