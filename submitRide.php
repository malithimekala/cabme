
<?php
      include_once 'config.php';

?>

<?php
     $type = $_POST["rad"];
	 $pick = $_POST["text1"];
	 $drop = $_POST["text2"];
	 $date = $_POST["text3"];
	 $time = $_POST["text4"];

      $sql ="insert into ride(ride_id,ride_type,ride_pick,ride_drop,ride_date,ride_time)values('','$type','$pick','$drop','$date','$time')";
	  
	 if(mysqli_query($conn,$sql))
	     {
		 echo "<script>alert ('ok')</script>";
		 header("Location:ride details.php");
	     }
	 else
	 {
		 echo "<script>alert ('error in booking')</script>";
	 }
	 mysqli_close($conn);
	 

?>