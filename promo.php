<?php 
include("database.php");
if(isset($_POST["btn"]))
{
	$name= $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];



	$sql = "INSERT INTO promotion(name,email,message)  VALUES ('$name','$email','$message')";
	$result = $conn->query($sql);
	
	if($result == true)
	{
	echo "<script>alert('success')</script>";
	}
	else{
		echo "error".$conn->error;
	}
}


 ?>












<!DOCTYPE html>
<html>
 <head>
   <title>my cab</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css"href="../style/promostyle.css">
 
   
 </head>
   <body>
   
   <div class="header">
   <div>
	<img src="../images/logo.png" alt="logo" class="logo">
	</div>
	<div class="buttons">
	<button class="button">Login</button>
	<button class="button"><a href="regi.html">Sign up</a></button>
	</div>
    </div>
	
	<div id="navbar">
      <a href="">Home</a>
      <a href="">Book a Ride</a>
      <a href="">Contact us</a>
	  <a href="">About us</a>
	  <a href="">Join with us</a>
	  
	  <a href="">Carriers</a>
	  <a class="active"href="">Promo</a>
	  <a "">Feedback</a>
	  </div>
	  
	
	
    <div class="banner-image">
     <div class="banner-text">
     <h1 style="font-size:50px">Ride with us with 50% OFF</h1>
    </div>
      </div>

        <div class="cover">
	
		    <div class = "promo-form">
		<div class="form">
	<form id="contact-form"method="post"action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype = "multipart/form-data">
	<input name="name"type="text"class="form-control"placeholder="Promo code"required>
	<br>
	<input name="email"type="email" class="form-control"placeholder="email"required><br>

		<Input name="message"class="form-control"placeholder="Message"row="4"
		required><br>
	
		<input type="submit" class="btn" name= "btn"value="Submit">
    

   <footer class="footer">
    
	<a href="https://google.com">Privacy Policy</a>&nbsp&nbsp		
	<a href="https://google.com">Terms & Conditions    </a>&nbsp&nbsp		
	<a href="https://google.com">Contact us</a>&nbsp&nbsp
       
	     <hr class="bottom">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<a href="https://www.facebook.com/" class="fa fa-facebook "></a>
	<a href="https://twitter.com/" class="fa fa-twitter "></a>
	<a href="https://lk.linkedin.com/" class="fa fa-linkedin "></a>
	<a href="https://www.youtube.com/" class="fa fa-youtube "></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram "></a>
	<br/><br/>
   </footer>
     </body>
</html>
