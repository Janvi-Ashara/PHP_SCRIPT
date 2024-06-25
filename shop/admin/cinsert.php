<html>
<body>
<h1>CATEGORY</h1>


<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>id</td>
<td> <input type="text" name="id"></td>
</tr>
<tr>
<td>name</td>
<td> <input type="text" name="name"></td>
</tr>
<tr>
<td>price</td>
<td> <input type="text" name="price"></td>
</tr>
<tr>
<td>detail</td>
<td> <input type="text" name="detail"></td>
</tr>

<tr>
<td>category</td>
<td> <input type="text" name="category"></td>
</tr>


<tr>
<td> Image: </td>
<td><input type="file" name="image" />
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
				 $name=$_POST['name'];
				 $price=$_POST['price'];
				 $detail=$_POST['detail'];
                 
                 $category=$_POST['category'];

				 $image=$_FILES['image']['name'];
				$target_dir=".../img/";
				$images=$target_dir.basename($image);
				move_uploaded_file($_FILES['image']['tmp_name'],$images);
		
$q="insert into category(id,name,price,detail,image,category) values(NULL,'".$name."','".$price."','".$detail."',
'".$image."','".$category."')"; 
					
						
					
	}

	
 ?>
 
 