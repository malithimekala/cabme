<?php
    include_once 'config.php';
?>


<!DOCTYPE html>
<html>
 <head>
   <title>my cab</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css"href="../style/feedbackstyle.css">
 
  
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
	
	<div id="navbar">
      <a href="Home.php">Home</a>
      <a href="">Book a Ride</a>
      <a href="Contact Us.html">Contact us</a>
	  <a href="">About us</a>
	  <a href="join.html">Join with us</a>
	  
	  <a href="Carrer Page.html">Carriers</a>
	  <a href="">Promo</a>
	  <a href="feedback.html">Feedback</a>
	  </div>
	  
	
	
    <div class="banner-image">
     <div class="banner-text">
     <h1 style="font-size:50px">we value your feedback</h1>
    </div>
      </div>
        <br>
		<br>
		<center>
		  <div style="border-style: groove; border-color:darkblue " width="70px" border="1px">
		    <table border="1" width="700px" border="1px" style="width:700px; line-height:50px;>
			
			 <tr>
               <th border="1px" colspan="8"><h2>Feedback Records</h2></th>
	         </tr>
			 <tr>
			    <th class="col1">feedback ID</th>
				<th class="col1">Name</th>
                <th class="col1">E-mail</th>
                <th class="col1">feedback Description</th>  				
			 </tr>
			   <?php
			    $sql    = "select * from feedback";
				$result = $conn->query($sql);
				
				if($result->num_rows>0){
				        
						while($row=$result->fetch_assoc()){
							echo "<tr><td>".$row["feedback_ID"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["feedback_describe"]."</td></tr>";
						} 
				
				}
				else{
					echo "0 results";
				}
				echo"</table>";
				
				$conn->close();
			   ?>
		  </div>
		</center>





  
     
		 
		 <button a href ="Feedback.html"style="position:relative; left:83%;border: none;color: black;padding: 12px 22px;font-size: 16px; 
		 cursor: pointer;background-color: gold;">Back to feedback</button>

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
