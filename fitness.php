<?php

// create member
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$email = $_GET['email'];
$pass= $_GET['pass'];

//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


// TEST IF MEMBER EXISTS BY EMAIL
$test = "SELECT * FROM `fitnesssignup` WHERE Email = '".$email."' ";


// TEST 
// MEMBER DOES NOT EXIST
if($mysqli->query($test) === 0){
  // CREATE MEMBER
  $createMember = "INSERT INTO fitnesssignup (`FirstName`, `LastName`, `Email`, `Pass`) VALUES ('".$firstName."','".$lastName."','".$email."','".$pass."')";
  echo "Member created";

  // RETURN SUCCESS
  if ($mysqli->query($createMember) === TRUE) {
    
  } else {// RETURN ERROR
    echo "Error: " . $createMember . "<br>" . $mysqli->error;
  }
}
// MEMBER EXISTS
else{
  echo "member already has that email";
}

// CLOSE
$mysqli->close();



  ?>