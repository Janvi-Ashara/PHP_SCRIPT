<?php
$emp= (object) [
   'employeeId'=>"101",
   'employeeFirstName'=>"John",
   'employeeLastName'=>"Doe",
   'employeeCountryName'=>"AUS"
];
$employeeDetails[] = [
   'emp_id' => $emp->employeeId,
   'emp_first_name' => $emp->employeeFirstName,
   'emp_last_name' => $emp->employeeLastName,
   'emp_country_name' => $emp->employeeCountryName
];
print_r(array_values($employeeDetails));
?>