<!DOCTYPE html>
<html>
<!--Header-->
<head>
    <title>Register</title>
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

 <!--content-->
<div class="content">
<br>
<br>

 <div class="container">
 
  <form method="post" action="insertquery.php" onSubmit="return checkPassword()">

    <h1 align="center">Register</h1>
    <p align="center">Please fill in this form to create an account.</p>
    <hr>
    <center>
	<table>
	  <tr>
	      <td width="5%" align="center">
		     <b>First Name</b>
		  </td>
		  <td width="30%" align="left">
		     <input type="text" size ="100" placeholder="Enter First Name" name="first_name" id="fname" required> 
		  </td>
	  </tr>
	  <tr>
	      <td width="30%" align="center">
		     <b>Last Name</b>
		  </td>
		  <td width="30%" align="left">
		     <input type="text" size ="10" placeholder="Enter Last Name" name="last_name" id="lname" required> 
		  </td>
	  </tr>
	  <tr>
	      <td width="30%" align="center">
		     <b>Mobile </b>
		  </td>
		  <td width=> 
		     <input type="mobile" size="100" name="mobile"  pattern="[0-9]{10}" placeholder="0987654321" required> 
		  </td>
	  </tr>
	  <tr>
	      <td width="30%" align="center">
		     <b>E-mail</b>
		  </td>
		  <td width=> 
		     <input type="email" size="100" name="email" placeholder="xyz@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> 
		  </td>
	  </tr>
	  <tr>
	      <td width="30%" align="center">
		     <b>Password</b>
		  </td>
		  <td width=> 
		     <input type="password" size="100" placeholder="Enter Password" name="password" id="pwd" required> 
		  </td>
	  </tr>
	  <tr>
	      <td width="30%" align="center">
		     <b>Repeat Password</b>
		  </td>
		  <td width=> 
		     <input type="password" size="100" placeholder="Repeat Password" name="cnfrmpwd" id="cnfrmpwd" required>
		  </td>
	  </tr>
	</table>  
	
	<hr>
	<br>
    
	<input class="inputStyle" size="100" id="checkBox" type="checkbox" onclick="enableButton()">Accept privacy policy and terms.<br/><br/>
    <button type="submit" id="submitBtn" size="100" class="registerbtn">Register</button>
  </div>

    <div class="container signin">
        <p>Already have an account? <a href="login.php">login</a>.</p>
    </div>
  </form>
  
<br>


<div class="container">
    <center>
      <table>
	    <tr width="100%" align="center">
	      <td>
	         <button class="btn1" type="button" id="button2" onclick="loadData('button2')">Terms and Conditions</button>
 	      </td>
	      <td width="50%" align="center">
	         <button class="btn1" type="button" id="button3" onclick="loadData('button3')">Privacy policy</button>
	      </td>
	    <tr>
	  </table>
	  <img id="pic1" src="" width="310px" height="260px">
	  
      <p class="text1" id="para"></p>
	  
    </center>
   
</div>
</center>
<br>
<br>
 
 <!--footer -->
<footer class="site-footer">

<table width="100%">
<tr>
   <td width="15%">
         <div class="footertwo">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Packages</a></li>
            </ul>
          </div>
   
   <td align = "left">
   
          <div class="footertwo">
            <ul class="footer-links">
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
   </td>
   <td align="right" >
   <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/">
					<img src="../images/facebook.png"  style="width:42px;height:42px;border:0;">
				</a> </li>
              <li><a class="twitter" href="https://twitter.com/?lang=en">
					<img src="../images/twitter.jpg" alt="Twitter" style="width:42px;height:42px;border:0;">
				</a></li>
              <li><a class="instagram" href="https://www.instagram.com/?hl=en">
					<img src="../images/instagram.jpg" alt="Instagram" style="width:42px;height:42px;border:0;">
				</a></li>
              <li><a class="youtube" href="https://www.youtube.com">
					<img src="../images/youtube.jpg" alt="Youtube" style="width:42px;height:42px;border:0;">
				</a></li>   
         		 </ul>
   </td>
   </table>

   <hr>
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by seacoast.</p> 
</footer>

</div>
<script type="text/javascript" src="../js/headerScript.js"></script>

</body>
</html>
