<?php
include_once 'configure.php';
?>
<?php
 $CUSTEMERID=$_POST['CUSTEMER ID'];
$CUSTEMERmail=$_POST['EMAIL ADRESS'];
$CUSTEMERcontact=$_POST['CONTACT NUMBER'];
$message=$_POST['MESSAGE'];
 $sql="insert into data(customer ID,Email EDRESS,contact number,Message)values('','$CUSTEMERmail','$CUSTEMERcontact','$message',)"
 
 if(mysqli_query(&conn,&sql)){
	 echo "<script>alert("thank you ,we will contact YOU ASAP!!!")</script>";
 } else{
	 echo "<script>alert("sorry,feed back didnt aubmit auccesfully!!!")</script>";
 }
	mysqli_close($conn); 
 
 
 
 
 
?>