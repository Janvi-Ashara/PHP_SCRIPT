<?php
include("connection.php");

$uid=$_GET['update_id'];
$uquery="select * from admin where ID=".$uid;
$up_query=mysqli_query($conn,$uquery);
$updata=mysqli_fetch_array($up_query);
?>
<html>
<body>
<h1>REGISTER</h1>
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>First Name :</td>
<td> <input type="text" name="fname" value="<?php echo $updata['1'];?>"></td>
</tr>
<tr>
<td>Last name</td>
<td> <input type="text" name="lname" value="<?php echo $updata['last_name']; ?>"></td>
</tr>
<tr>
<td>City</td>
<td> <input type="text" name="city" value="<?php echo $updata['city']; ?>"></td>
</tr>
<tr>
<td>Contact No</td>
<td> <input type="number" name="contact" value="<?php echo $updata['contact_no']; ?>"></td>
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
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$city=$_POST['city'];
	$cno=$_POST['contact'];
	
	
	if($_FILES['img1']['name']!=''){
	
	$imgg=$_FILES['img1']['name'];
	$dir="img/";
	$tot=$dir.basename($imgg);	
	move_uploaded_file($_FILES['img1']['tmp_name'],$tot);	
	}else{
	$imgg=$_POST['imgd'];
	}
	
	$update_query="update admin set 
			
		first_name='".$fname."',
		last_name='".$lname."',
		city='".$city."',
		contact_no='".$cno."',
		
		img='".$imgg."'
		where ID='".$uid."'
	";
	
      $updatedata=mysqli_query($conn,$update_query);
	
	if($updatedata=1){
		
		header("location:elist.php");
		
	}	
}
?>

