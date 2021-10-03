<?php 
	include_once ("config.php");
	?>
	
	
<?php


$CardNumber = $_POST["cardnum"];
$PinNumber = $_POST["pwd"];
$name = $_POST["fname1"];
$name2 = $_POST["fname2"];
$mobile= $_POST["mobile"];
$email1 = $_POST["emailAdd1"];
$addr = $_POST["addr1"];
$Date1 = $_POST["date1"];

	

$sql="insert into item(CN,PN,NAME,NAME2,MOB,EMAIL,ADDR,DATEa)values('$CardNumber','$PinNumber','$name','$name2','$mobile','$email1','$addr','$Date1')";



mysqli_close($conn);

?>

