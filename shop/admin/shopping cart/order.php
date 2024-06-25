<?php
    include("connect.php");
    
    
    $list_query="select* from `order`";
    $data_query=mysqli_query($conn,$list_query);
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link -->
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
<h1  class="heading" align="center">ORDER RECORD</h1>
   
<table>

      <thead>
        
         <th style="width: 10px;">id</th>
         <th style="width: 10px;">name</th>
         <th style="width: 20px;">number</th>
         <th style="width: 20px;">email</th>
		     <th style="width: 10px;">method</th>
         <th style="width: 20px;">Address</th> 
         <th style="width: 10px;">quantity</th>
         <th style="width: 10px;">total_price</th>
         <th style="width: 20px;">Action</th>

      </thead>

<tbody>


<?php
    while($list_data=mysqli_fetch_array($data_query)){
        ?>
      <tr>  
        <td style="width: 10px;"><?php echo $list_data['id'];?></td> 
        <td style="width: 10px;"><?php echo $list_data['name'];?></td>
        <td style="width: 20px;"><?php echo $list_data['number'];?></td>
        <td style="width: 20px;"><?php echo $list_data['email'];?></td>
        <td style="width: 10px;"><?php echo $list_data['method'];?></td>
        
        <td style="width: 20px;"><?php echo $list_data['flat'];?>
        <?php echo $list_data['street'];?>
        <?php echo $list_data['city'];?>
        <?php echo $list_data['state'];?>
        <?php echo $list_data['country'];?>
        <?php echo $list_data['pin_code'];?></td>
        
        <td style="width: 10px;"><?php echo $list_data['total_products'];?></td>
        <td style="width: 10px;"><?php echo $list_data['total_price'];?></td>
        <!-- <td><a href="odelete.php?delete_id=<?php echo $list_data['id'];?>">DELETE </a></td>  -->
        <td style="width: 20px;">  <a href="odelete.php?delete_id=<?php echo $list_data['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');">
         <i class="fas fa-trash"></i> delete </a></td> 
        
    </tr>

    <?php

		
    }
    ?>
    </tbody>
    </table>
    
    <style>

      </style>
</body>
</html>



