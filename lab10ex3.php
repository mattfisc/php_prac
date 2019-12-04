<?php
//TASK 1: CREATE AN ARRAY OF ARRAYS CONTAINING A TYPE OF FACT AND THE FACT
$array = array();
$array[] = array("popularity", "C++ gained instant popularity in 1983, the year it was introduced.");
$array[] = array("popularity", "C++ was the third most popular language in 2018.");
$array[] = array("popularity", "Most of Adobe, and much of Amazon’s websites are written in C++.");
$array[] = array("popularity", "C++ has remained in demand since 1983 because it is a powerful tool that is adaptable.");
$array[] = array("characteristic", "C++ is an Object Oriented Programming Language (OOPL).");
$array[] = array("characteristic", "C++ have huge Function Library.");
$array[] = array("characteristic", "C++ is highly Flexible language with Versatility.");
$array[] = array("characteristic", "C++ can be used for developing System Software viz., operating systems, compilers, editors and data bases.");
$array[] = array("characteristic", "C++ is suitable for Development of Reusable Software.");
 
 
//TASK 2: RANDOMLY SELECT AN ELEMENT FROM THE ARRAY
$item = mt_rand(0,8);
$factType = $array[$item][0];
$fact = $array[$item][1];
 
//TASK 3: PACK THE WORD AND DEFINITION INTO A JSON OBJECT
$json = array(
  "factType" => $factType,
  "fact" => $fact
);
 
 
//TASK 4: RETURN THE JSON OBJECT TO THE JAVASCRIPT FUNCTION
header("Content-type: application/json");
print (json_encode($json));
?>
 
