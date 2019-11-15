<?php
    $fruitarray = file("fruit.txt");

    shuffle($fruitarray);
    echo "list of fruit randomly<br><br>";
    
    foreach($fruitarray as $fruit){
        echo $fruit;
        echo "<br>";
    }

    
?>