<?php
    include_once 'config.php';
?>

<?php
   $name        =$_POST["feedback_name"];
   $email       =$_POST["feedback_email"];
   $description =$_POST["feedback_describe"];

   $sql ="Insert into feedback(feedback_ID,Name,Email,feedback_describe)values('','$name','$email','$description')";
   
   
   if(mysqli_query($conn,$sql)){
	   
	   
	   header("location:feedback.html");
   }
    else{
		echo"<script>alert ('Error!')</script>";
	}
	 echo"<script>alert ('Feedback insterd successfully')</script>";
	mysqli_close($conn)
?>

