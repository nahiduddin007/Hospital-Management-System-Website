<?php
include 'connection.php';

?>



<html  lang="zxx" class="no-js">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="img/fav.png">
    
    <meta name="author" content="colorlib">
    
    <meta name="description" content="">
    
    <meta name="keywords" content="">
    
    <meta charset="UTF-8">
    
    <title>Action</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      
      <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/jquery-ui.css">        
      <link rel="stylesheet" href="css/nice-select.css">              
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">     
      <link rel="stylesheet" href="css/jquery-ui.css">      
      <link rel="stylesheet" href="css/main.css">
    </head>
    



<style>

input[type=text]{
    width: 80%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 25px;
    font-size: 16px;
    background-color: white;
    padding: 2px 5px;

}


input[type=submit]{
    
 
    bottom: 80%;
    background-color: black;
    color: white;
    font-size: 16px;

    padding: 5px 4px;
    border: none;
    cursor: pointer;
    border-radius: 25px;
    text-align: center;

}
</style>




    
      <header id="header">
        <div class="header-top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                      
              </div>
              <div class="col-lg-6 col-sm-6 col-8 header-top-right">
              
              </div>
            </div>                  
          </div>
      </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
                                                                                  
             <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="gird.php">Dashboard</a></li> 
                <li><a href="add.php">Add Appointment</a></li>
                <li><a href="update.php">Update Appoinment</a></li>                           
                <li><a href="delete.php">Delete Appoinment</a></li>

                <li>
                  <form  method="post">
                  <input type="text" name="searchText" placeholder="search" align="center">
                  <input type="submit" name="btn_search" value="Search">
                  </form>
                </li>
                
              </ul>
            </nav>                                        
        </div>
        </div>
      </header>

<link href="style.css" rel="stylesheet" type="text/css" />

<div class="link">
    <b>
   <h1><a href =""</a>  </h1>
	<h2><a href="">  </a> </br></h2>
	<h2><a href=""> </a> </br> </h2>
	<h2><a href="">  </a> </br></h2>
	</b>
</div>

 




  <style>


table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
  
}

tr:nth-child(even)
{background-color: #f2f2f2
color: #fff;}

th {
    background-color: #ff3300 ;
    color: white;
}
</style>



<div class="data">
 <body style="background-color:black;">
 
     <marquee direction="right" onmouseover="this.stop()" onmouseout="this.start()">
     <center>
     <h3 style="color : white;">Patient Appoinment List </h3>
     </center>
      </marquee>
  
<table width="832"  align="center" cellpadding="5" class="table table-border">
  <tr>
    <th width="50">Patient-id</th>
    <th width="137">Patient-name</th>
    <th width="252">Email</th>
    <th width="165">Phone-no</th>
    <th width="154">Diease Type</th>
    <th width="154">Apoinment-date</th>
    <th width="154">Address</th>
    <th width="154">Ref-doctor</th>
   
  </tr>
  <?php
  
  	
	$sql = "select * from dashboard";
	
	$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	
	if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))	
			{

  if (isset($_POST['btn_search'])) {
   $search = $_POST['searchText'];
    $sql = "SELECT * FROM dashboard WHERE CONCAT(patient_id,Patient_name, Email, Phone_no, Gender,Disease_type, apointment_date, Address,Ref_doctor) LIKE  '%".$search."%'";
  }


  
  ?>
  
  <tr>
 	<td><?php echo $row['patient_id'] ?></td>
    <td><?php echo $row['Patient_name'] ?></td>
    <td><?php echo $row['Email'] ?></td>
    <td><?php echo $row['Phone_no'] ?></td>
    <td><?php echo $row['Disease_type'] ?></td>
    <td><?php echo $row['apointment_date'] ?></td>
    <td><?php echo $row['Address'] ?></td>
    <td><?php echo $row['Ref_doctor'] ?></td>
   
  </tr>
<?php
		//echo "<tr><td>".$row["ID"]."</td><td>".$row["username"]."</td><td>".$row['Address']."</td><td>".$row["Email"]."</td><td>".$row['mobile']."</td></tr>";	
			
			}
		}

?>
</table>
</div>
</body>
</html>