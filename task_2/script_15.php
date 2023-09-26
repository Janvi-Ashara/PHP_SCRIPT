<?php
$a=10;
$b=20;
$c=30;
if ($a>$b)
{
	if ($a>$c) 
	{
		echo "The largest of three number is ".$a;
	}
	else
	{
		echo "The largest of three number is ".$c;
	}
}
else
{
	if ($b>$c) 
	{
		echo "The largest of three number is ".$b;
	}
	else
	{
		echo "The largest of three number is ".$c;
	}
}
?>