<?php


$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

$firstKey = array_key_first($array);

// var_dump() function is used to dump information about a variable
var_dump($firstKey);
echo "<br/>";

$lastkey = array_key_last($array);
var_dump($lastkey);


?>