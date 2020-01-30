 



<?php
   session_start();
   require 'dbConfig/configure.php';
?>


<?php
              
  if(isset($_POST['btn_login']))
	  
	  {  
		  $email=$_POST['email'];
		  $password=$_POST['password'];

		  if ($email == "" || $password == "") {
		  		echo'<script type="text/javascript"> alert("Field must not be empty") </script>';
		  }else{
		  	$query="select * from user WHERE email='$email' AND password='$password'";
		   
		  $query_run= mysqli_query($con,$query);
		  
		  if(mysqli_num_rows($query_run)>0)
		  {
			  //valid
			 $_SESSION['email']=$email;
			 $_SESSION['password']=$password;
			

			 
			  header('location:gird.php');
		  }
		  else
		  {
			  //invalid
			 echo'<script type="text/javascript"> alert("Usser name or password not match") </script>'; 
		  }
		}
		  
		   
	  }
?>