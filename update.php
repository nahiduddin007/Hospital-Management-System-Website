
<b> 
<center>
<h1 style="background-color: white ;">Update patient </h1>

</b>
</center>


<!--CSS INCLUDE WITH HTML-->
<head>
<style>

input[type=text]{
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;

}

input[type=Date]{
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;

}
input[type=submit]{
    
 
    bottom: 100%;
    background-color: black;
    color: white;
    font-size: 16px;

    padding: 8px 50px;
    border: none;
    cursor: pointer;
    border-radius: 25px;
    text-align: center;

}






</style>
</head>

<body style="background-color:#79a6d2 ;">
<center
<form action="" method="post">
	<table>
		<tr>
        	<td>Patient-id</td>
            <td><input name="patient_id" type="text"></td>
        </tr>
        <tr>
        	<td>Patient-name</td>
            <td><input name="Patient_name" type="text"></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input name="Email" type="text"></td>
        </tr>
        <tr>
        	<td>Phone-no</td>
            <td><input name="Phone_no" type="text"></td>
        </tr>
        <tr>
        	<td>Gender</td>
            <td><input type="radio" name="Gender" value="male" checked> Male<br>
                <input type="radio" name="Gender" value="female"> Female<br>
                <input type="radio" name="Gender" value="other"> Other</td>
        </tr>
         <tr>
        	<td>Disease-type</td>
            <td><input name="Disease_type" type="text"></td>
        </tr>
         <tr>
        	<td>Appoinment-date</td>
            <td><input type="Date" name="apointment_date"></td>
        </tr>
         <tr>
        	<td>Address</td>
            <td><input name="Address" type="text"></td>
        </tr>
         <tr>
        	<td>Ref-Doctor</td>
            <td><input name="Ref_doctor" type="text"></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="submit" name="button_input"></td>
        </tr>
	
<center/>






		<tr>
        	<td></td>
            <td><?php    
				function v(){
					//echo "Plz write some data that you want to update";
					header ('Location:update.php');
					
					
				}
			?></td>
        </tr>
    </table>
<form>
<?php 
	include 'connection.php';
	
	if(isset($_POST['button_input'])){
		
			$id=$name=$email=$no=$gender=$disease=$date=$address=$doctor="";

	if($_SERVER["REQUEST_METHOD"]=="POST"){
			$id=validate($_POST["patient_id"]);
			$name=validate($_POST["Patient_name"]);
			$email=validate($_POST["Email"]);
			$no=validate($_POST["Phone_no"]);
			$gender=validate($_POST["Gender"]);
			$disease=validate($_POST["Disease_type"]);
			$date=validate($_POST["apointment_date"]);
			$address=validate($_POST["Address"]);
			$doctor=validate($_POST["Ref_doctor"]);
			
			
			
			if ($name!='' && $email!='' && $no!='' && $gender!='' && $disease!=''&& $date!='' && $address!=''&& $doctor!='')
		 {
			$sql = "UPDATE dashboard SET Patient_name='$name',Email='$email',Phone_no='$no',Gender='$gender',Disease_type='$disease',apointment_date='$date',Address='$address',Ref_doctor='$doctor' WHERE patient_id='$id'";
		 
		 }
		 	else if ($address!='' && $email!='' && $no!='')
		 {
			$sql = "UPDATE dashboard SET Address ='$address',Email='$email',Phone_no='$no' WHERE patient_id ='$id'";
		 
		 }
		 	else if ($name!='' && $email!='' && $no!='')
		 {
			$sql = "UPDATE dashboard SET Patient_name='$name',Email='$email',Phone_no='$no' WHERE patient_id='$ai'";
		 
		 }
		 
		   else if ($name!='' && $address!='' && $email!='')
		 {
			 $sql = "UPDATE dashboard SET Patient_name='$name',Address='$address',Email='$email' WHERE patient_id='$id'";
		 }
		 
		      else if ($name!='' && $email!='' && $no!='')
		 {
			    $sql = "UPDATE dashboard SET Patient_name='$name',Email='$email',Phone_no='$no' WHERE patient_id='$id'";
		  }
		  
			 else if ($name!='' && $address!='' && $no!='')
		 {
			 $sql = "UPDATE dashboard SET  Patient_name='$name',Address='$address',Phone_no='$no' WHERE patient_id='$id'";
		 }
		   else if ($email!='' && $no!='')
		 {
			 $sql = "UPDATE dashboard SET Email='$email',Phone_no='$no' WHERE patient_id='$id'";
		 }
		 else if ($address!='' && $no!='')
		 {
			 $sql = "UPDATE dashboard SET Address='$address',Phone_no='$no' WHERE patient_id='$id'";
		 }
		 
			else if ($address!='' && $email!='')
		 {
			 $sql = "UPDATE dashboard SET  Address='$address',Email='$email' WHERE patient_id='$id'";
		 } 
		  else if ($name!='' && $no!='')
		 {
			 $sql = "UPDATE dashboard SET Patient_name='$name',Phone_no='$no' WHERE patient_id='$id'";
		 }
		 else if ($name!='' && $email!='')
		 {
			 $sql = "UPDATE dashboard SET Patient_name='$name',Email='$email' WHERE patient_id='$id'";
		 }
		 else if ($name!='' && $address!='')
		 {
			 $sql = "UPDATE dashboard SET  Patient_name='$name',Address='$address' WHERE patient_id='$id'";
		 }
		 
		 else if ($name!='' )
		 {
			 $sql = "UPDATE dashboard SET  Patient_name='$name' WHERE patient_id='$id'";
		 }
		
		 else if ($email!='' )
		 {
			 $sql = "UPDATE dashboard SET Email='$email'  WHERE patient_id='$id'";
		 }
		   else if ($address!='' )
		 {
			 $sql = "UPDATE dashboard SET Address='$address'  WHERE patient_id='$id'";
		 }
		  else if ($no!='' )
		 {
			 $sql = "UPDATE dashboard SET Phone_no='$no'  WHERE patient_id='$id'";
		 }
		 
		 
		 
		 
		 
 //=========================================================
		 elseif ($name=='' && $email=='' && $no=='' && $gender=='' && $disease==''&& $date=='' && $address==''&& $doctor==''){
			 v();
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
