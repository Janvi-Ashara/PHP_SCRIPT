<?php
$fruits = [
    'apple' => 'red',
    'banana' => 'yellow',
];
if (array_key_exists('banana', $fruits)) {
    echo "The key 'banana' exists in the array.";
} else {
    echo "The key 'banana' does not exist in the array.";
}

?>