<?php


// FIRST PAGE
$userEmail = $_POST['userEmail'];
$userPwd = $_POST['userEmail'];

//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// TEST IF MEMBER EXISTS BY EMAIL
// $test = "SELECT * FROM `fitnesssignup` WHERE Email = '$email' "; works
$test = "SELECT Email, Pass FROM `fitnesssignup` WHERE Email = '$email'";

// TEST
$check = $mysqli->query($test);

// LOGIN IN MEMBER

if($check->num_rows > 0){
    while($row = $check->fetch_assoc()){
        if($row['Email']=== $email && $row['Pass']=== $pass){
            // CHANGE PAGE
            header('location:fitness.html#memberPage');
        }
    }
}
else{
    // CHANGE PAGE
    header('location:fitness.html#homepage');
    echo "Failed to login! Try registering first!";
}




?>