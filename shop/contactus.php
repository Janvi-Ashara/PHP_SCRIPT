<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ellementry</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    

<?php
include 'header.php';
?>


<br>
<br>
<br>
<br>


<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="container">
		
      <form method="post" autocomplete="on" >
		
        <!--First name-->
    		<div class="box">
          <label for="username" class="fl fontLabel"> name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="name" placeholder="name"
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
          <label for="text" class="fl fontLabel"> number </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="number" placeholder="number" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

            
    		<!---CPassword------>
    		<div class="box">
          <label for="message" class="fl fontLabel"> message </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="message" required name="message" placeholder="message" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		

    		

    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
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
  background: #fffff0;
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

        

    </div>

</section>

<!-- contact section ends -->



<?php
include "footer.php";
?>

</body>
</html>



<?php
	include("connect.php");
	
	if(isset($_REQUEST['Submit'])){
		
			 	 $name=$_POST['name'];
				 $email=$_POST['email'];
				 $number=$_POST['number'];
				 $message=$_POST['message'];
		
			 
			
		 $q="insert into contactus(id,name,email,number,message) 
         values(NULL,'".$name."','".$email."','".$number."','".$message."')"; 
         
         mysqli_query($conn,$q)or die("Can't Insert".mysql_error());
      
					
	
    }

	
 ?>
 