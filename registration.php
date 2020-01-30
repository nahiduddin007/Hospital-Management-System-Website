<?php
require 'dbConfig/configure.php';

?>


<?php
    if(isset($_POST['btn_signup']))
	{
		//echo'<script type="text/javascript"> alert ("sign up button clicked")</script>';
		$fname = $_POST['fname'];
        $lname = $_POST['lname'];
		$email= $_POST['email'];
		$password= $_POST['password'];
	
		
		if($password==$password)
			
		{
			$query="select * from user WHERE email='$email'";
			$query_run= mysqli_query($con,$query);
			
			if (mysqli_num_rows($query_run)>0)

			{
				header('location:index_login.php');

				//there is alredy a user with the same username
				echo'<script type="text/javascript"> alert ("user already exists..try another username")</script>';
			}
			else
			{
			   $query="insert into user(email,password,F_name,L_name) values('$email','$password','$fname','$lname')";
			   $query_run=mysqli_query($con,$query);
			   if( $query_run)
			   {
				 	echo'<script type="text/javascript"> alert ("User registered..Go to login page to login")</script>';  
			   }
			   else
			   {
				 echo'<script type="text/javascript"> alert("Error!") </script>'; 
			   }
			}
		}
		else
			
			
		{
			
          echo'<script type="text/javascript"> alert("password and confirm password does not match!") </script>'; 
		
		}	
	}
?>