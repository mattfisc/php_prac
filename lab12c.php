<?php

//Go Daddy$mysqli = new mysqli("127.0.0.1","root","","cs222",3306);

$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

//$myName = $_POST["myName"];

if($myName != null){
    $sql = "SELECT FirstName, LastName, Email FROM matt WHERE FirstName = '$myName'";
}
else{
    $sql = "SELECT FirstName,LastName,Email FROM matt";
}

$result = $mysqli->query($sql);


// build table


if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "email: " . $row["Email"] . " Name: " . $row["FirstName"] . $row["LastName"]. "<br>";
    }
}
else{
    echo "0 results";
}

?>