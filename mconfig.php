<?php
   $servername = "localhost";  //saving(assign) these values inside this variables $xxxx
   $username   = "root";
   $password   = "";
   $db         ="cabme";


          // Create connection with database ($conn  is a connection object also a variable)
       $conn = new mysqli($servername, $username, $password,$db);//mysqli function create database connection option by passing ($servename....)


           // Check connection
           if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
                }
              echo "Connected successfully";
?>