<?php

// create member
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pass= $_POST['pwd'];


//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// TEST IF MEMBER EXISTS BY EMAIL
$test = "SELECT * FROM `fitnesssignup` WHERE Email = '$email' ";
echo $test;

// TEST
$check = mysqli_query($mysqli,$test);
// NUMBER OF ROWS IN QUERY FOUND
$num = mysqli_num_rows($check);

if($num == 1){
  header('location:f_p2.php?message="fail"');
  echo "<p>Member email taken.  Try again! <br></p>";
}
else{
  
  // QUERY STRING FOR MEMBER
  $createMember = "INSERT INTO fitnesssignup (`FirstName`, `LastName`, `Email`, `Pass`) VALUES ('".$firstName."','".$lastName."','".$email."','".$pwd."')";

  // CREATE MEMBER ERROR CHECK
  if ($mysqli->query($createMember) === TRUE) {
    // SUCCEESS
    header('location:f_p1.php?message="created');
  } 
  else {
    // RETURN ERROR
    header('location:f_p2.php?message="fail"');
    

  }
}

?>