<?php
  // READ FILE
  $line = file("culinary.txt");

  // SELECT TERM AND DEFINITION
  list($term, $category, $definition) = preg_split("/[\t]/", trim($line[array_rand($line)]));

  echo "$term, $category, $defintion";
  //CREATE ARRAY
  $json = array();
  for ($i=0; $i < 9; $i++) { 
    # code...
    $json[] = array(
      "definition" => $definition,
    "category" => $category,
    "term" => $term
    )
  }

  // RETURN JSON
  header("Contenttype:Application/json");
  print(json_encode($json));

?>
