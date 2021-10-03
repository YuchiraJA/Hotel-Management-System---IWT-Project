<!DOCTYPE html>
<html>
<!--Header-->
<head>
    <title>Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"  href="../css/headerStyles.css">
	<link rel="stylesheet" type="text/css"  href="../css/registerStyles.css">
	<link rel="stylesheet" type="text/css"  href="../css/footerStyles.css">
	<script type="text/javascript" src="../js/registerScript.js"></script>
</head>

<body>
<div class="header">
   <table width="100%">
      <tr>
         <td width="8%">
           <img class="logo" src="../images/logo.png" width="100" height="100" alt="SeaCoastlogo">
         </td>
         <td align = "left">
           <h1 class ="header_title">Seacoast Hotel</h1>
         </td>
         <td align="right">
           <a href="login.php" class="btn1">Login</a>
         </td>
      </tr>
   </table>
</div>

<!--navbar-->
<div id="navbar">
   <a href="home.php">Home</a>
   <a href="bookNow.php">Book Now</a>
   <a href="event.php">Events</a>
   <a href="services.php">Services</a>
   <a href="packages.php">Packages</a>
   <a href="gallery.php">Gallery</a>
   <a href="contactUs.php">Contact Us</a>
   <a href="aboutUs.php">About Us</a>
</div>

<script type="text/javascript" src="../js/headerScript.js"></script>


<body>
	<table width="80%" border=1>

		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>E-mail</th>
			<th>Update</th>
		</tr>

<?php 
//create connection
require_once('inc/connection.php');

//fetch all users data from database
$query = "SELECT * FROM user ORDER BY id DESC";

  $result = mysqli_query($connection, $query);

  //Output data of each row

  if ($result->num_rows>0) {
  	while($row = $result->fetch_assoc()){
  		echo"<tr>";
  		echo "<td>".$row['first_name']."</td>";
  		echo "<td>".$row['last_name']."</td>";
  		echo "<td>".$row['email']."</td>";
  		echo "<td><a href='edit.php?id=$row[id]'>Update</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
  		echo "<tr>";


  	}
  }
?>

</table>


</body>
</html>

