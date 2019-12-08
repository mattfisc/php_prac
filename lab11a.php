
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
  
 //TASK 2: BUILD A STRING CONTAININ A MYSQL INSTRUCTION TO SELECTING ALL RECORDS
 $sql = "SELECT email, firstName, lastName FROM matt";
  
 //TASK 3: USE THE ESTABLISHED DATABASE CONNECTION TO PROCESS THE DATABASE QUERY.
 //        STORE THE RESULTS IN A VARIABLE.
 $result = $mysqli->query($sql);
  
  
 //TASK 4:
 if ($result->num_rows > 0) {
   // TASK 3: OUTPUT DATA FOR EACH ROW
   while($row = $result->fetch_assoc()) {
     echo "email: " . $row["email"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
   }
 } else {
   echo "0 results";
 }
 ?>
 