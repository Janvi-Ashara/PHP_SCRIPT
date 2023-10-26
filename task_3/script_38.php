
<?php
$array = array(1, 2, 3, 4, 5);
//mixed array_shift(array &$array)
$first_element = array_shift($array);

echo "Removed element: " . $first_element . PHP_EOL;
print_r($array);


echo "<br>";


$new_length = array_unshift($array, 0);

echo "New length of array: " . $new_length . PHP_EOL;

print_r($array);

?>

