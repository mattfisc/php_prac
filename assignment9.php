<?php

// GET USER INPUT
$selectedTerm = $_REQUEST['q'];  

// GET FILE
$line = file("culinary.txt");

// GET NEW LINES
do {
    list($food, $term, $true_def) = preg_split("/[\t]/", trim($line[array_rand($line)]));
} while ($term != $selectedTerm);

// CORRECT ARRAY
$correct= array(
    
    "definition"=>$true_def,
    "correct"=>true
);

// GET FIRST DECOY MULTIPLE CHOICE ANSWER
do{
  $first_def=preg_split("/[\t]/", trim($line[array_rand($line)])); 
  // GET A RANDOM DEFINTION
} while($first_def[2]==$true_def);

// FIRST DECOY ARRAY
$first = array(
    "definition"=>$first_def[2],
    "correct"=>false
);

// GET SECOND DECOY MULTIPLE CHOICE ANSWER
do{ 
  $second_def=preg_split("/[\t]/", trim($line[array_rand($line)]));
  // GET A RANDOM DEFINTION
} while($second_def[2]==$true_def || $second_def[2]== $first_def[2]);

// SECOND DECOY ARRAY
$second = array(
    "definition"=>$second_def[2],
    "correct"=>false
);

// 2D ARRAY OF SELECTED TERM 
// WITH ONE ANSWER AND TWO RANDOM
$choices = array($first,$second,$correct);

// JSON OBJ
$json = array(
    "term" => $term,
    "food" => $food,
    "choices"=>$choices
);

// RETURN JSON
header("Contenttype:Application/json");
print(json_encode($json));
?>