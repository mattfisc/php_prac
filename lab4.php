<?php
    // task 1 read and open file
    $line = file("play.txt");
    // taske 2 select term
    list($word, $name, $definition) = preg_split("/[t]/",trim($line[array_rand($line)]));
    // task 3
$json = array{
    "definition" => $definition,
    "word" => $word
}
    // task 4
    header("Contenttype:Application/json");
    print(json_encode($json));
?>