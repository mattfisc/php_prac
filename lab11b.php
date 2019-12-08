<?php
//TASK 1: MAKE A CONNECTION TO THE DATABASE, DISPLAY ERROR FOR FAILED CONNECTIONS
//        Argument 1: IP address provided by GoDaddy
//        Argument 2: Database user with access privileges
//        Argument 3: Database password
//        Argument 4: Database Name
//        Argument 5: Port for MySQL, which is not hosted locally.
//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
 

$mysqli = new mysqli("localhost","root","","cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
 
//TASK 2: GET FIRST NAME FROM THE FORM
$myName = $_POST["myName"];
 
 
//TASK 3: SELECT ALL RECORDS WITH A MATCHING FIRST NAME
//$sql = "SELECT email, firstName, lastName FROM Friends WHERE firstName=$myName";
//$sql = "SELECT email, firstName, lastName FROM Friends WHERE firstName = 'carol'";
$sql = "SELECT email, firstName, lastName FROM matt WHERE firstName = '$myName'";
 
$result = $mysqli->query($sql);
 
if ($result->num_rows > 0) {
  // OUTPUT DATA FOR EACH ROW
  while($row = $result->fetch_assoc()) {
    echo "email: " . $row["email"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
