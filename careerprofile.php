<?php
	// link connection
    include_once 'mconfig.php';
	
	
	//retreive data from the database
	$sql    = "select * from career where career_id='7'";
				$result = $conn->query($sql);
				
				if($result->num_rows>0){
				        
						//assign them to variables
						while($row=$result->fetch_assoc())
						{
							$cn= $row["c_name"];
							$ctel=$row["c_telephone"];
							$cmail= $row["email"];
							$ctype= $row["career_des"];
						}
						
				}
				
				
				// nested if statement to updatde or delete	
				if(isset ($_POST['update']))
				{
					$name        = $_POST["fname"];
					$telephone   = $_POST["tel"];
					$email       = $_POST["emailad"];  
					$des         = $_POST["ct"];
					
					//sql command to update
					$sql = "UPDATE career SET c_name = '$name', c_telephone = '$telephone', email = '$email' , career_des= '$des' WHERE career_id = '7'"; //where??

					if (mysqli_query($conn, $sql))
					{
						echo "Record updated successfully";
						header('Location:careerprofile.php');
					} 
								
					else
					{
						echo "Error updating record: " . mysqli_error($conn);
						
					}
					
					
					mysqli_close($conn);

				}
				
				
				else if(isset ($_POST['delete']))
				{
	
					// sql to delete a record
					$sql = "DELETE FROM career  WHERE career_id = '7' "; //where ???

					if (mysqli_query($conn, $sql))
					{    
						echo"<br>";
						echo "Record deleted successfully";
					}
					
					else 
					{
						echo "Error deleting record: " . mysqli_error($conn);
					}

					mysqli_close($conn);
	
				}
				
				
				else
				{
					mysqli_close($conn);
				}	

				
				
				
				
				
				
				
				
				
				
				
?>

<!DOCTYPE html>
<html>
 <head>
   <title> Career Registration </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css"href="../style/style.css">
   	  <link rel="stylesheet" href="../style/Register.css">
	  	 <link rel="stylesheet" href="../style/contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

	
	<style>

		.cp
		{
			width:30%;
		height:450px;
		padding-top:3%;
		padding-bottom:3%;
		border:10px solid #fad800;
		border-radius:7px;
		background-color:#fad800;
		text-align:left;
		padding-left:5px;
		padding-right:5px;
		margin-top:3%;
		margin-bottom:3%;
		margin-left:35%;
		}
		
		
		.up
		{
			
			
			width:30%;
			padding:10px 10px;
			border-radius:8px;
			background-color: green;
			font-size:12px;	
			color:white;
			cursor:pointer;
			font-weight:bold;
			margin:10px 2px;	
			
		}
		
		.del
		{
			
			
			width:30%;
			padding:10px 10px;
			border-radius:8px;
			background-color: red;
			font-size:12px;	
			color:white;
			cursor:pointer;
			font-weight:bold;
			margin:10px 2px;	
			
			
		}




	
	</style>
	
	
	
	
 
   
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
		<h2> Career Profile </h2>
		</center>
		
		  <div class="cp">
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?> " target="_self" method="POST" >
					
					Name <br>
					<input type="text" id="fname" name="fname" style = "width:90% ; height:45px" value= "<?php echo $cn ?>"> <br>
		  
					Contact No <br>
					<input type="tel" id="tel" name="tel" pattern="[0-9]{0,10}"  style = "width:90% ; height:45px" value= "<?php echo $ctel ?>" > <br>
			
					Email <br>
					<input type="email" id="emailad" name="emailad" style = "width:90%; height:45px" pattern="[a-zA-Z0-9.%_+-]+@[a-z0-9]+\.[a-z]{2,3}" value= "<?php echo $cmail ?>"> <br>
			
					Career Type <br>			
					<input type="text" id="ct" name="ct" style = "width:90% ; height:45px" value= "<?php echo $ctype ?>"> <br>
					
					<input type="submit" name="update" class="up" value="update"> <br> <br>
					<input type="submit" name="delete" class="del" value="delete"> <br> <br>
					
				</form>	
				
		  
		  
		  
		  </div>
		

       


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
