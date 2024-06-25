<?php
include("connection.php");

$uid=$_GET['update_id'];
$uquery="select * from wishlist where ID=".$uid;
$up_query=mysqli_query($conn,$uquery);
$updata=mysqli_fetch_array($up_query);
?>
<html>
<body>
<h1>wishlist</h1>
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>id:</td>
<td> <input type="text" name="id" value="<?php echo $updata['1'];?>"></td>
</tr>
<tr>
<td>pid</td>
<td> <input type="text" name="pid" value="<?php echo $updata['pid']; ?>"></td>
</tr>
<tr>
<td>uid</td>
<td> <input type="text" name="uid" value="<?php echo $updata['uid']; ?>"></td>
</tr>
<tr>
<td>timestamp</td>
<td> <input type="text" name="timestamp" value="<?php echo $updata['timestamp']; ?>"></td>
</tr>

<tr>
<td> Image: </td>
<td><input type="file" name="img1" value="<?php echo $updata['8']; ?>" />
</td>
<td><img src="imag/<?php echo $updata['8']; ?>" height="100" width="100" />
<input type="hidden" name="imgd" value="<?php echo $updata['8']; ?>" />
</td>
</tr>
<tr>
<td><input type="submit" name="updates" value="UPDATE"><br></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_REQUEST['updates'])){
	
	$id=$_POST['id'];
	$pid=$_POST['pid'];
	$uid=$_POST['uid'];
	$timestamp=$_POST['timestamp'];
	
	
	if($_FILES['img1']['name']!=''){
	
	$imgg=$_FILES['img1']['name'];
	$dir="img/";
	$tot=$dir.basename($imgg);	
	move_uploaded_file($_FILES['img1']['tmp_name'],$tot);	
	}else{
	$imgg=$_POST['imgd'];
	}
	
	$update_query="update wishlist set 
			
		id='".$id."',
		pid='".$pid."',
		uid='".$uid."',
		timestamp='".$timestamp."',
		
		img='".$imgg."'
		where ID='".$uid."'
	";
	
      $updatedata=mysqli_query($conn,$update_query);
	
	if($updatedata=1){
		
		header("location:list.php");
		
	}	
}
?>

