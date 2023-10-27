<?php
//Remove a city of your choice from the array and display the updated list.

$cities = array("mumbai","pune","Mussoorie");
	unset($cities["1"]);
	
	print_r($cities);
?>