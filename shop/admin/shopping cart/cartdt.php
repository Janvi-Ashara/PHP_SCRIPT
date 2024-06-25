
<?php

include("connect.php");
$id=$_GET['delete_id'];
$delete_query="delete from cart where ID=".$id; 
$del_id1=mysqli_query($conn,$delete_query);

if($del_id1=1)
{
    header("location:cart2.php");
    
}

?>