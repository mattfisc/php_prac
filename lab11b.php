<?php
 
//TASK 1: MAKE A CONNECTION TO THE DATABASE, DISPLAY ERROR FOR FAILED CONNECTIONS
//        Argument 1: IP address provided by GoDaddy
//        Argument 2: Database user with access privileges
//        Argument 3: Database password
//        Argument 4: Database Name
//        Argument 5: Port for MySQL, which is not hosted locally.
//NOTE: $mysqli = new mysqli("127.0.0.1", "username", "password", "database", 3306);
 
$mysqli = new mysqli("localhost", "root", "", "cs222");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
 
//TASK 2: BUILD A STRING CONTAININ A MYSQL INSTRUCTION TO SELECTING ALL RECORDS
//        RETRIEVE DATA FROM QUERY STRING
$name = $_GET['firstName'];
$sql = "SELECT * FROM matt WHERE FirstName = '$name'";
 
//TASK 3: USE THE ESTABLISHED DATABASE CONNECTION TO PROCESS THE DATABASE QUERY.
//        STORE THE RESULTS IN A VARIABLE.
$result = $mysqli->query($sql);
 
//TASK 4: BUILD A TABLE OF RESULTS IN A STRING
if ($result->num_rows > 0) {
  $myDisplayResults = "<table>";
  $myDisplayResults .= "<tr>";
  $myDisplayResults .= "<th>First Name</th>";
  $myDisplayResults .= "<th>Last Name</th>";
  $myDisplayResults .= "</tr>";
 
  while($row = $result->fetch_assoc()) {
    $myDisplayResults .= "<tr>";
    $myDisplayResults .= "<td>$row[firstName]</td>";
    $myDisplayResults .= "<td>$row[lastName]</td>";
    $myDisplayResults .= "</tr>";
  }
  $myDisplayResults .= "</table>";
  echo $myDisplayResults;
} else {
  echo "0 results";
}
?>
