<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>PLEASE LOGIN!</h1>

    </head>
    <body>
        <div>
		<?php
        include 'header.php';
            ?>
		<br>
    <!-- Body of Form starts -->
  	<div class="container">

      <form method="post" autocomplete="on" action="">
        <!--First name-->
    		<div class="box">
			
          <label for="email" class="fl fontLabel"> email: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="email" placeholder=" Enter your email"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->

    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="password" required name="password" placeholder="password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
			<p>don't have an account?
				<br><a href="reg.php">register now</a></p>
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
  <style>
    *{
	padding: 0;
	margin: 0;
}
h1{
	text-align:center;
	margin: 50px;
	height: 20px;
	font-size:24px;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
  background: #b2b2b2;
}


.container{
	background: #2d3e3f;
	width: 450px;
	height: 350px;
	padding-bottom: 20px;
	position: absolute;
	top:60%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}
.container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#fff;
}
.container form p a{
   color:#3abac9;
}
.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}
.fontLabel{
  color: white;
}
.fr{
	float: right;
}
.clr{
	clear: both;
}
.box{
	width: 350px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}
.textBox{
	height: 35px;
	width: 200px;
	border: none;
  padding-left: 20px;
}
.new{
  float: left;
}
.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #3abac9;
}
.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #3abac9;
	text-transform: uppercase;
    cursor: pointer;
}
.message {
margin:auto;
display:flex;
max-width:420px;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
}
</style>
</html>


<?php
	include 'connect.php';
	if(isset($_POST['Submit'])){

$email=$_POST['email'];
$password=$_POST['password'];

// Given password
// $password = 'user-input-pass';

// // Validate password strength
//  $uppercase = preg_match('@[A-Z]@', $password);
//  $lowercase = preg_match('@[a-z]@', $password);
// $number    = preg_match('@[0-9]@', $password);


// if(!$uppercase || !$lowercase || !$number || strlen($password) < 6) {
// 	echo "<script> alert ('Password should be at least 6 characters in length and should include at least one upper case letter, one number, and one special character.')
// 							</script>";
// }


$q="select *from user where password='$password' AND email='$email'";	

$rows = mysqli_query($conn,$q);
if(mysqli_num_rows($rows)){
	
		echo "<script>window.open('home.php')
		</script>";
	
	$_SESSION['email']=$email;

}
else{

	echo"<script> alert ('Email or password is incorrect !')
	</script>";
	
}

// mysqli_close($conn);
}
	
?>  
<?php


@include 'config.php';

if(isset($_REQUEST['add_to_cart'])){

   $qry="select *from products where id=".$_REQUEST['id'];
   $res=mysqli_query($conn,$qry);
   $row=mysqli_fetch_array($res);
   $product_name = $row['name'];//$_POST['product_name'];
   $product_price = $row['price'];//$_POST['product_price'];
   $product_image = $row['image'];//$_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
