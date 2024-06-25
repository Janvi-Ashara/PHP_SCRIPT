<?php
	include("connect.php");
	
	if(isset($_REQUEST['Submit'])){
		
			 	 $Username=$_POST['username'];
				 $email=$_POST['email'];
				 $password=$_POST['password'];
				 $cpassword=$_POST['cpassword'];
		
			 
				if($email== ' '){
					
					echo "
					<script>alert ('please enter the email')
					</script>";
					exit();
				}
				$q="select *from user WHERE email='$email'";
				$rows = mysqli_query($conn,$q);
						if(mysqli_num_rows($rows)>0){
							echo "<script> alert ('Email $email is already exist in our database, Please try another one!')
							</script>";
							exit();
						}

         if($password != $cpassword){
			echo "<script> alert (' password $password and confirm password $cpassword does not match')
							</script>";
		 }else{
		
		 $insert_user="insert into user(id,Username,email,password,cpassword) values(NULL,'".$Username."','".$email."','".$password."','".$cpassword."')"; 
					
				if(mysqli_query($conn,$insert_user)){
					echo "<script>window.open('home.php')
					</script>";
				}
					
					
					}
				}
			
 ?>
 

<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTER</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>REGISTER NOW!</h1>
	
  </head>
  <body>
	<div>
	
<?php
include 'header.php';
?>

    <!-- Body of Form starts -->
  	<div class="container">
		
     <form method="post" autocomplete="on"  >
		
        <!--First name-->
    		<div class="box">
          <label for="username" class="fl fontLabel"> username: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="username" placeholder="Enter Your Username"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->

    		
    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> email: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="email" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


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

            
    		<!---CPassword------>
    		<div class="box">
          <label for="cpassword" class="fl fontLabel"> cpassword </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="password" required name="cpassword" placeholder="cpassword" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
			<p>already have an account?
				<br><a href="login.php">login now</a></p>

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
  background: #b2b2b2;
}

.container{
	background: #2d3e3f;
	width: 450px;
	height: 380px;
	padding-bottom: 10px;
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

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}

</style>
</html>

