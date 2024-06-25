<html>
<body>
<h1>wishlist</h1>

<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>id</td>
<td> <input type="text" name="id"></td>
</tr>

<tr>
<td>price</td>
<td> <input type="text" name="price"></td>
</tr>

<tr>
<td>quantity</td>
<td> <input type="text" name="quantity"></td>
</tr>


<tr>
<td> Image: </td>
<td><input type="file" name="img" />
</td>
</tr>
<tr>
<td><input type="submit" name="Submit"><br></td>
</tr>
</table>
</form>
</body>
</html>


<?php
	include("connection.php");
	
	if(isset($_REQUEST['Submit'])){
		
			 	 $id=$_POST['id'];
				
				 $price=$_POST['price'];
				 $quantity=$_POST['quantity'];
				 $timestamp=$_POST['timestamp'];
			
				
			
				$img=$_FILES['img']['name'];
				$target_dir="images/";
				$imgs=$target_dir.basename($img);
				move_uploaded_file($_FILES['img']['tmp_name'],$imgs);
			 
				
			 $iquery="insert into wishlist(ID,price,quantity,img) values
			 (NULL,'".$price."','".$quantity."','".$img."')"; 
					
						
					$p1=mysqli_query($conn,$iquery);
					if($p1=1){
						header("location:list.php?msg1=inserted");
					
					}
					if($p1=0){
						echo"not inserted";
					
					}
				}

	
 ?>
 
 