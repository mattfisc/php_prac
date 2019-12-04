<?php
  // READ FILE
  $line = file("culinary.txt");

  // SELECT TERM AND DEFINITION
  list($term, $category, $definition) = preg_split("/[\t]/", trim($line[array_rand($line)]));

  
  //CREATE ARRAY
  $json = array(
    "definition" => $definition,
    "category" => $category,
    "term" => $term
  );

  // RETURN JSON
  header("Contenttype:Application/json");
  print(json_encode($json));

?>
