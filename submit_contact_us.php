<?php
    include_once 'mconfig.php';
?>
<?php
   $name        =$_POST["cname"];
   $email       =$_POST["cemail"];
   $description =$_POST["cmessage"];
   
   $sql ="Insert into contactus(contact_id,contact_name,contact_email,contact_message) values ('','$name','$email','$description')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('record insert successfully!')</script>";
		header("location:Contact Us.html");
		
	}
	else{
		echo "<script>alert('error')</script>";
	}
	mysqli_close($conn);
?>