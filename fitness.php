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
//$results = "SELECT * FROM `fitnesssignup` WHERE Email = $email";

//$result = $mysqli->query($sql);


$sql = "INSERT INTO fitnesssignup(`FirstName`, `LastName`, `Email`, `Pass`) VALUES ('matthewasdf','asdf','asdf','3453')";

//$result = $mysqli->query($sql);

if ($mysqli->query($sql) === TRUE) {
    echo "hello world created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();



  ?>