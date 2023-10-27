<?php
//Remove the email element from the associative array and display the updated array.
$person = array(
	"name" => "janvi",
	"age" => 21,
	"email" => "janvi123@gmail.com"
	);
	unset($person["email"]);
	
	print_r($person);
	

?>
