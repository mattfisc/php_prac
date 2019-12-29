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
$test = "SELECT * FROM `prac` WHERE Email = '$email' ";


// TEST
$check = mysqli_query($mysqli,$test);

// NUMBER OF ROWS OF DATA
$num = mysqli_num_rows($check);

// MEMBER EXISTS
if($num == 1){
    echo "email already exists";
}
// CREATE NEW MEMBER
else{
    //header('location:fitness.html#homepage');
    echo "Creating Member... <br>";

    // QUERY STRING FOR MEMBER
    $createMember = "INSERT INTO prac (`FirstName`, `LastName`, `Email`, `Password`) VALUES ('".$first."','".$last."','".$email."','".$pwd."')";

    // CREATE MEMBER
    if ($mysqli->query($createMember) === TRUE) {
        echo "New record created successfully";
    } else {// RETURN ERROR
        echo "Error: " . $createMember . "<br>" . $mysqli->error;
    }


    
    $mysqli->close();

}
?>