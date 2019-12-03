<?php
// TASK 1: CONNECT TO THE SERVER
$mysqli= new mysqli("localhost", "root", "", "cs222");

$sql = "SELECT FirstName, LastName, Email From matt";

$result = $mysqli->query($sql);

if($result->num_rows > 0) {
    // output rows
    while($row = $result->fetch_assoc()){
        echo "email: " . $row["Email"]. " -Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
}
else{
    echo "0 results";
}
