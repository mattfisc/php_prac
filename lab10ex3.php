<?php
//TASK 1: OPEN AND READ THE FILE INTO ARRAY
$line = file("play.txt");

//TASK 2: RANDOMLY SELECT A TERM AND definition
list($word, $name, $definition) = preg_split("/[\t]/", trim($line[array_rand($line)]));

//TASK 3: CREATE A JSON OBJECT
$json = array (
  "definition" =>$definition,
  "word" => $word
);

//TASK 4: RETURN THE JSON OBJECT 
header("Contenttype:Application/json");
print(json_encode($json));

?>