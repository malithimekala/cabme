 <?php
 
 
 include_once 'config.php';
 ?>
 
 
 <?php
    $fname = $_POST["fname1"];
    $lname = $_POST["lname1"];
    $nic = $_POST["nic1"];
    $mobileno = $_POST["mobileno1"];
    $brand = $_POST["brand1"];
    $model = $_POST["model"];
    $vehicleno = $_POST["vehicleno"];
	
	
	
	$sql = "insert into insertcabs(	id,firstname,lastname,nicnum,mobilenum,brand,model,vehiclenum)values('','$fname','$lname','$nic','$mobileno','$brand','$model','$vehicleno')";
 
    if(mysqli_query($conn,$sql)){
		
		echo"<script>alert ('details sent successfully')</script>";
		
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	header("Location:join.html"); 
	echo"alert ('Feedback insterd successfully')";
	
	mysqli_close($conn);
?> 