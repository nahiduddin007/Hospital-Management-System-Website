<?php 
	include 'connection.php';
	
	if(isset($_POST['button_input'])){
		
		$sql = "INSERT INTO dashboard(patient_id,Patient_name, Email, Phone_no, Gender,Disease_type, apointment_date, Address,Ref_doctor) 
				values('".$_POST['patient_id']."',
					'".$_POST['Patient_name']."',
					'".$_POST['Email']."',
					'".$_POST['Phone_no']."',
					'".$_POST['Gender']."',
					'".$_POST['Disease_type']."',
					'".$_POST['apointment_date']."',
					'".$_POST['Address']."',
					'".$_POST['Ref_doctor']."'
				
				)";
				
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:Action.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		
		}
	
	
?>
<center>
<b> 


<h1 style="background-color:LightSteelBlue ;">Add Appoinement </h1>


</b>


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









<body style="background-color: #666699; ">





<form action="" method="post">
   
	<table>
    	<tr>
        	<td>Patient-id</td>
            <td><input type="text" name="patient_id"></td>
        </tr>
        <tr>
        	<td>Patient-name</td>
            <td><input type="text" name="Patient_name"></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input type="text" name="Email"></td>
        </tr>
        <tr>
        	<td>Phone-no</td>
            <td><input type="text" name="Phone_no"></td>
        </tr>
        <tr>
        	<td>Gender</td>
            <td><input type="radio" name="Gender" value="male" checked> Male<br>
                <input type="radio" name="Gender" value="female"> Female<br>
                <input type="radio" name="Gender" value="other"> Other</td>
        </tr>
         <tr>
        	<td>Disease-type</td>
            <td><input type="text" name="Disease_type"></td>
        </tr>
         <tr>
        	<td>Appoinment-date</td>
            <td><input type="Date" name="apointment_date"></td>
        </tr>
         <tr>
        	<td>Address</td>
            <td><input type="text" name="Address"></td>
        </tr>
         <tr>
        	<td>Ref-Doctor</td>
            <td><input type="text" name="Ref_doctor"></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="submit" name="button_input"></td>
        </tr>
    </table>


	
<form>
   
</center>