<?php
	include("connect.php");
	
	if(isset($_REQUEST['Submit'])){
		
			 	 $Username=$_POST['Username'];
				 $email=$_POST['email'];
				 $password=$_POST['password'];
				 $cpassword=$_POST['cpassword'];
		
			 
				if($password != $cpassword){
					
					echo "password and confirm password does not match";
				}else{
			 $q="insert into user(ID,Username,email,password) values(NULL,'".$Username."','".$email."','".$password."')"; 
					
						
					$p1=mysqli_query($conn,$q);
					if($p1=1){
						header("location:.\index.php?msg1=inserted");
                        
					
					}
					if($p1=0){
						echo"not inserted";
					
					}
				}

	}
 ?>
 
 