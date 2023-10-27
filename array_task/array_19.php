<?php
//Sort the cities in alphabetical order.

$cities = array("ahemdabad","pune","mussoorie","munich");
sort($cities);

foreach($cities as $city)
{
print_r($city);
echo"<br>";
}
?>
