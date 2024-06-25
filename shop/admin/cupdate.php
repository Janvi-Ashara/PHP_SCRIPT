<?php
include("connection.php");

$id=$_GET['update_id'];
$uquery="select * from category where ID=".$id;
$up_query=mysqli_query($conn,$uquery);
$updata=mysqli_fetch_array($up_query);
?>
<html>
<body>
<h1>CATEGORY</h1>
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>id:</td>
<td> <input type="text" name="id" value="<?php echo $updata['id'];?>"></td>
</tr>
<tr>
<td>name</td>
<td> <input type="text" name="name" value="<?php echo $updata['name']; ?>"></td>
</tr>
<tr>
<td>price</td>
<td> <input type="text" name="price" value="<?php echo $updata['price']; ?>"></td>
</tr>
<tr>
<td>detail</td>
<td> <input type="text" name="detail" value="<?php echo $updata['detail']; ?>"></td>
</tr>

<tr>
<td> Image: </td>
<td><input type="file" name="img1" value="<?php echo $updata['image']; ?>" />
</td>
<td><img src="imag/<?php echo $updata['image']; ?>" height="100" width="100" />
<input type="hidden" name="imgd" value="<?php echo $updata['image']; ?>" />
</td>
</tr>

<tr>
<td>category</td>
<td> <input type="text" name="category" value="<?php echo $updata['category']; ?>"></td>
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
    $name=$_POST['name'];
    $price=$_POST['price'];
    $detail=$_POST['detail'];
    
    $category=$_POST['category'];

	
	
	if($_FILES['img1']['name']!=''){
	
	$imgg=$_FILES['img1']['name'];
	$dir="img/";
	$tot=$dir.basename($imgg);	
	move_uploaded_file($_FILES['img1']['tmp_name'],$tot);	
	}else{
	$imgg=$_POST['imgd'];
	}
	
	$update_query="update category set 
			
		name='".$name."',
		price='".$price."',
		detail='".$detail."',
		category='".$category."',
		
		img='".$imgg."'
		where ID='".$id."'
	";
	
      $updatedata=mysqli_query($conn,$update_query);
	
	if($updatedata=1){
		
		header("location:clist.php");
		
	}	
}
?>

