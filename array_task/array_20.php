<?php
//Reverse the order of the cities in the array from question 19.

$cities = array("ahemdabad","pune","mussoorie","munich");
rsort($cities);

foreach($cities as $city)
{
print_r($city);
echo"<br>";
}


?>