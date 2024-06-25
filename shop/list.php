<?php
include("connection.php");

$list_query="select * from wishlist";
$data_query=mysqli_query($conn,$list_query);
?>

<html>
<body>

<h1> REGISTER <a href="heart.php">Add Record</a></H1>   
<table border="2">	
		<tr>
			<th>id</th>
			<th>pid</th>
			<th>uid</th>
			<th>timestamp</th>
			
		
			<th>Image</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php  
			$path="../img/"; 
			while($list_data=mysqli_fetch_array($data_query)){
		
		?>
		<tr>
			<td><?php echo $list_data['0'];  ?> </td>
			<td><?php echo $list_data['1'];  ?></td>
			<td><?php echo $list_data['2'];  ?> </td>
			<td><?php echo $list_data['3'];  ?> </td>
			
			
			<td><img src="<?php echo $path.$list_data['4'];?>" height="100" width="100"/> </td>
			<td><a href="delete.php?delete_id=<?php echo $list_data['id']; ?>">DELETE</a></td>
			<td><a href="update.php?update_id=<?php echo $list_data['id']; ?>">UPDATE</a></td>
		</tr>
		
		<?php	}  ?>
	
	</table>
</body>
</html>
