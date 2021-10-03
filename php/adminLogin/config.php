<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="demo";
	
	//The connection object
	$conn = new mysqli($servername,$username,$password,$db);
	
	// Check connection
	if($conn->connect_error)
	{
		die("Connection failed: " .$conn->connect_error);
	}
	
	echo"Connect Succesfully";
	
?>