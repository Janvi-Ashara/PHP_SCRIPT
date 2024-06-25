<?php
    include("connect.php");
    $list_query="select* from `cart`";
    $data_query=mysqli_query($conn,$list_query);
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   

</head>


    
        <body>
            <?php
            include 'header.php';
            ?>
<?php
session_start();
if(!isset($_SESSION['Username'])){
  header('location:adminlogin.php');
}
?>
        
<section class="display-product-table">
<h1  class="heading" align="center">CART RECORD</h1>
   <table>

      <thead>
         <th>id</th>
         <th>email</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>image</th>
         <th>Action</th>
      </thead>

<tbody>


<?php
    while($list_data=mysqli_fetch_array($data_query)){
        ?>
        <tr>  <td><?php echo $list_data['id'];?></td> 
        <td><?php echo $list_data['email'];?></td>
       <td><?php echo $list_data['name'];?></td>
        <td><?php echo $list_data['price'];?></td>
        <td><?php echo $list_data['quantity'];?></td>
        <td><img src="uploaded_img/<?php echo $list_data['image']; ?>" height="100" alt=""></td>
        
      <!-- <td><a href="rdelete.php?delete_id=<?php echo $list_data['id'];?>">DELETE </a></td>-->
      <td>  <a href="cartdt.php?delete_id=<?php echo $list_data['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');">
         <i class="fas fa-trash"></i> delete </a></td>
    </tr>
    <?php

		
    }
    ?>
    </tbody>

    </table>
</body>
</html>



