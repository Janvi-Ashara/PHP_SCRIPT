<?php
$input=11; 
    for ($i = 2; $i <= $input-1; $i++) 
    {  
      if ($input % $i == 0) 
      {  
      		$value= True;  
      }  
	}  
if (isset($value) && $value) 
{  
     echo 'The Number '. $input . ' is not prime';  
}  
else 
{  
   echo 'The Number '. $input . ' is prime';  
}   

?>