<?php
	
	$error='';
	if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
	$error ="Username or password is invalid";

}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$q="select *from user where password='$password' AND name='$username'";
$rows = mysqli_query($conn,$q);
if(mysqli_num_rows($rows)>0){
	session_start();
	$_SESSION['login_user']=$username;
	header("location:index.php");
}
else{
	$error ="Username or Password is invalid";
	echo"<script type='text/javascript'>alert('you are not registered');</script>";
}
//mysqli_close($connection);
}
	}
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
	<br>
	<h1>PLEASE LOGIN!</h1>
  
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
			
            ?>
  
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on" action="index.php">
		
        <!--First name-->
    		<div class="box">
          <label for="username" class="fl fontLabel"> username: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="uname" placeholder="username"
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
    					<input type="password" required name="pwd" placeholder="password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

            
    		

    		<!--Terms and Conditions------>
    		<div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
		

   
       

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



.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
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

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}

</style>
</html>
