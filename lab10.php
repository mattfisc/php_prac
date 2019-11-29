<?php

    $pass = $_REQUEST[q];
    $returnValue = "";

    if ($pass == "1234"){
        $returnValue = "You did it!!!!!!!";
    }
    else{
        $returnValue = "invalid";
    }
    
    print $returnValue;
?>