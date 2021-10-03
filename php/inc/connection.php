<?php
     //$connection = mysqli_connect(dbserver, dbuser, dbpass, dbname);
	 $connection = mysqli_connect('localhost', 'root', '', 'userdb');
	 
	 //mysqli_connect_errno(); can see error number
	 // mysquli_connect_error();can see error
	 
	 //Checking the connection
	if (mysqli_connect_errno()) {
	    die('Database Connection failed ' . mysquli_connect_error());
	} 
	else {
	     //echo "Connection successful." ;
	 }
?>