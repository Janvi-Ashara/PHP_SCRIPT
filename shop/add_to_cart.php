<?php
session_start();
$email = $_SESSION['email'];

if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
else
{

include("header.php");

include "connect.php";


?>

<?php

include("config.php");
{
	$prid=$_GET['id'];
    $prnm=$_GET['name'];
	$pr=$_GET['price'];
	$i=$_GET['path'];
	$_GET['quantity']=1;
	$stock=$_GET['quantity'];
                       
	 
     $select_cart = mysqli_query($conn, "SELECT * FROM `cart`WHERE name = '$prnm' AND email = '$email'");

  if(mysqli_num_rows($select_cart) > 0){
	  header("location:cart.php?=msg:already_added");  
      $message[] = 'product already added to cart';
   }
  else{
      $insert_product = mysqli_query($conn,"insert into `cart`(id,email,name,price,image,quantity) values(NULL,'$email','$prnm','$pr','$i','$stock')");   
	 header("location:cart.php?=msg:added");  
	 $message[] = 'product added to cart succesfully';
	// header("location:cart.php");
     }

}

?>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
}
?>
