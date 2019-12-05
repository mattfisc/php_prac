<?php

//Go Daddy$mysqli = new mysqli("127.0.0.1","root","","cs222",3306);

$mysqli = new mysqli("localhost","root","","matt");
if(mysqli->connect_errno){
    echo "Failed to connect to MySQL:(";
}

$myName = $POST["myName"];

if(myName != null){
    "SELECT FirstName, LastName, Email FROM matt Where FirstName = 'myName'";
}
else{
    sql = "Select FristName,LastName,Email FROM matt";
}

result = $mysqli->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "email: " . 
    }
}

?>