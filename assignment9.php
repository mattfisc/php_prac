<?php
    // task 1 read and open file
    $line = file("culinary.txt");
    // taske 2 select term
    list($word, $type, $definition) = preg_split("/[\t]/",trim($line[array_rand($line)]));
    // task 3
$json = array{
    "definition" => $definition,
    "type" => $type,
    "word" => $word
};
    // task 4
    header("Contenttype:Application/json");
    print(json_encode($json));
?>