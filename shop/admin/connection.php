<?php
$conn=mysqli_connect("localhost", "root", "", "element");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	
	//header("location:employee_insert.php?Connection successfully");
}
?>