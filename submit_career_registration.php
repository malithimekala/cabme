<?php
    include_once 'mconfig.php';
?>
<?php
   $name        =$_POST["c_name"];
   $telephone   =$_POST["c_telephone"];
   $email       =$_POST["email"];  
   $des         =$_POST["cartype"];
   
   $sql ="Insert into career(career_id,c_name,c_telephone,email,career_des)values('','$name','$telephone','$email','$des')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('record insert successfully!')</script>";
		header("location:Career Registration.html");
		
	}
	else{
		echo "<script>alert('error')</script>";
	}
	mysqli_close($conn);
?>