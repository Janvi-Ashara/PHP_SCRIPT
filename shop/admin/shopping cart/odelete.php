
<?php

include("connect.php");
$id=$_GET['delete_id'];
$delete_query="delete from order where ID=".$id; 
$del_id=mysqli_query($conn,$delete_query);

if($del_id=1)
{
    header("location:order.php");
    
}

?>