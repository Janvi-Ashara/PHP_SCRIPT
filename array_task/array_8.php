<?php 

// Remove a specific number of your choice from the array and display the updated array.

$numbers=array(5,7,10,11,12);

unset($numbers[2]);

foreach($numbers as $num)
{
    print_r($num);
    echo "<br>";
}

?>