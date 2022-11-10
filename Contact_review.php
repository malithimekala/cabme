<?php
    include_once 'mconfig.php';
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Contact Us </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css"href="../style/style.css">
   	  <link rel="stylesheet" href="../style/Register.css">
	  	 <link rel="stylesheet" href="../style/contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<script type="text/javascript" src="../js/Register.js"> </script>
 
   
 </head>
   <body>
   
   <div class="header">
	<img src="../images/logo.png" alt="logo" class="logo">
    </div>
	
	    <div class="dropdown" style="float:right;">
         <button class="dropbtn"> ☰ </button>
          <div class="dropdown-content">
            <a href="#">Log in</a>
            <a href="#">Sign up</a>
            <a href="#">My account</a>
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
     <h1 style="font-size:50px">Ride with us</h1>
    </div>
      </div>
           
		   <center>
		  <div style="border-style:grrove; border-color: darkblue">
		    <table border="1" width="700px" border="1px" style="width:700px; line-height:50px;>
			
			 <tr>
               <th border= "1px" colspan="8"><h2>Contact messages</h2></th>
	         </tr>
			 <tr>
			    <th class="col1">Contact  ID</th>
				<th class="col1">Name</th>
                <th class="col1">E-mail</th>
                <th class="col1">Message</th>  				
			 </tr>
			   <?php
			    $sql    = "select * from contactus";
				$result = $conn->query($sql);
				
				if($result->num_rows>0){
				        
						while($row=$result->fetch_assoc()){
							echo "<tr><td>".$row["contact_id"]."</td><td>".$row["contact_name"]."</td><td>".$row["contact_email"]."</td><td>".$row["contact_message"]."</td></tr>";  
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
          
        




        <button style="position:relative; left:83%;border: none;color: black;padding: 12px 22px;font-size: 16px; 
		 cursor: pointer;background-color: gold;"><a href="feedback_review.php"> Review customer feedback</a></button>

   <footer class="footer">
    
	<a href="https://google.com">Privacy Policy</a>&nbsp&nbsp		
	<a href="https://google.com">Terms & Conditions    </a>&nbsp&nbsp		
	<a href="https://google.com">Contact us</a>&nbsp&nbsp	
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
