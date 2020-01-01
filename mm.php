<?php

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];

$pwd = $_POST['pwd'];

$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

// TEST IF MEMBER EXISTS BY EMAIL
$test = "SELECT * FROM `fitnesssignup` WHERE Email = '$email' ";


// TEST
$check = mysqli_query($mysqli,$test);

// NUMBER OF ROWS OF DATA
$num = mysqli_num_rows($check);

if($num == 1){
    echo "found same email";
}
// CREATE NEW MEMBER
else{
    
}
?>