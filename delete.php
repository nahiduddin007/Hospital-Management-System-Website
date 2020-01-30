

<b> 
<center>
<h1 style="background-color: ocean ;"> Delete User </h1>
</b>
</center>
<body style="background-color:teal;">


<form action="" method="post">
	<table>
		<tr>
        	<td>ID</td>
            <td><input name="add_ID"></td>
        </tr>
		<tr>
        	<td></td>
            <td><input type="submit" name="button_input"></td>
        </tr>
    	
    </table>
<form>
<?php 
	include 'connection.php';
	
	if(isset($_POST['button_input'])){
		
			$ai="";

	if($_SERVER["REQUEST_METHOD"]=="POST"){
			$ai=validate($_POST["add_ID"]);
			
			
			
			if ($ai!='')
		 {
			$sql = "DELETE FROM dashboard WHERE patient_id ='$ai'";
		 
		 }
		 
		 else{
			 echo "Plz write some data that you want to update";
		 }
		 
		 
		 
		 
		 
			//-------------------------------------------------------------------
			if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:Action.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
			
	}
			
			
			
			
			
			
			//------------------------------------------
			
			
			
		}
		function validate($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}	
	
	
?>
