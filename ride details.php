<?php
      include_once 'config.php';

?>


<!DOCTYPE html>
<html>
<head>
      <title>ride details</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../css/book.css">
	  <link rel="stylesheet" type="text/css" href="../css/1.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="../js/book.js"></script>


</head>
<body>

<div class="header">
    <div>
	<img src="../images/logo.png" alt="logo" class="logo">
    </div>
	<div class="buttons">
	<button class="button">Login</button>
	<button class="button">Sign up</button>
	</div>
    </div>
	
	
<!--navi-->	
<div id="navbar">
      <a class="active" href="#">Home</a>
      <a href="">Book a Ride</a>
      <a href="Contact Us.html">Contact us</a>
	  <a href="">About us</a>
	  <a href="join.html">Join with us</a>
	  
	  <a href="Carrer Page.html">Carriers</a>
	  <a href="">Promo</a>
	  <a href="feedback.html">Feedback</a>
	  </div>	

<center>

<h2>thnk 4 book a ride</h2>
<br><br>
ride details<br>

<table>
<tr>
   <th border="1px"> </th>
</tr>

<tr>
   <th>ride id</th>
   <th>type</th>
   <th>pick</th>
   <th>drop</th>
   <th>time</th>
   <th>date</th>
</tr>   
 
<?php
    $sql="select * from ride";
   $result= $conn->query($sql);
    
if($result->num_rows>0){

    while($row=$result->fetch_assoc()){
    
	echo"<tr><td>".$row["ride_id"]."</td><td>".$row["ride_type"]."</td><td>".$row["ride_pick"]."</td><td>".$row["ride_drop"]."</td><td>".$row["ride_date"]."</td><td>".$row["ride_time"]."</td></tr>";
	}
}
    else{
		echo "0 results";
	}	
	echo"</table>";
    $conn->close(); 
	

	
	
?>


</center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!--Footer-->
<footer class="footer">
    
	<a href="https://google.com">Privacy Policy</a>&nbsp&nbsp		
	<a href="https://google.com">Terms & Conditions    </a>&nbsp&nbsp		
	<a href="https://google.com">Contact us</a>&nbsp&nbsp	
	<a href="https://google.com">Contact us</a>&nbsp&nbsp	
       
	     
		 
	<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
	<a href="https://twitter.com/" class="fa fa-twitter"></a>
	<a href="https://lk.linkedin.com/" class="fa fa-linkedin"></a>
	<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
	<br><br>
	<hr class="bottom">
	<br><br>
	© Copyright © 2020 - CAB ME (Pvt) Ltd. All rights reserved.
	
   </footer>
    

</body>
</html>