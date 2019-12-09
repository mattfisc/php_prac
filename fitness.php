<?php

$mysqli = new mysqli("localhost","root","","cs222");

// ERROR MESSAGE FAILED TO CONNECT
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }


// Member variables
$firstName= $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];


$display = $firstName;
echo $firstName;
//Go Daddy$mysqli = new mysqli("127.0.0.1","root","","cs222",3306);




?>