<?php

    $num = $_POST["nvalue"];
    $binary = "";

    while ($num > 0) {
        $val = $num % 2;
        $binary = $val.$binary;
        $num = floor($num/2);
    }
    print $binary;
    

?>