<?php

// create member
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pass= $_POST['pass'];

echo $firstName;

//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// TEST IF MEMBER EXISTS BY EMAIL
$test = "SELECT * FROM `fitnesssignup` WHERE Email = '$email' ";


// TEST
$check = mysqli_query($mysqli,$test);
// NUMBER OF ROWS IN QUERY FOUND
$num = mysqli_num_rows($check);

if($num == 1){
  header('location:fitness.html#signUp');
  echo "Member email taken.  Try again! <br>";
}else{
  header('location:fitness.html#homepage');
  echo "Creating Member... <br>";
  // QUERY STRING FOR MEMBER
  $createMember = "INSERT INTO fitnesssignup (`FirstName`, `LastName`, `Email`, `Pass`) VALUES ('".$firstName."','".$lastName."','".$email."','".$pass."')";

  $message = "Member created!<br>Try to login in";
  

  // CREATE MEMBER
  if ($mysqli->query($createMember) === TRUE) {
    
  } else {// RETURN ERROR
    $message = "Member already exists";
  }
}


  ?>