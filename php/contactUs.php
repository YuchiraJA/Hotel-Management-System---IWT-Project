<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"  href="../css/headerStyles.css">
	<link rel="stylesheet" type="text/css"  href="../css/footerStyles.css">
	<link rel="stylesheet" type="text/css"  href="../css/contactusStyles.css">
	
</head>

<!--Her-->
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
      <td width="20%" align="right" >
         <a href="login.php" class="btn1">Login</a>
      </td>
      <td width="7%" align="left" >
         <a href="register.php" class="btn2">Register</a>
      </td>
    </tr>
    </table>
  </div>
  
<!--navbar-->
<div id="navbar">
   <a href="home.php">Home</a>
   <a href="bookNow.php">Book Now</a>
   <a href="events.php">Events</a>
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

<table id="border1" width="80%" align="center" >
<tr>
    <td width="10%" align="left">
          <label><h2><b>GET IN TOUCH</br></h2></label>
    </td>
	
    <td rowspan="3" width="20%" align="center">
	      
          <center><label><h2><b>Contact us</br></h2></label></center><br>
		  <hr>
		  <br>
		 
          <div class="form">
            <form action="insertquery1.php" method="post">
             <label><b>First Name</b></label>
             <input type="text" id="fname" name="full_name" placeholder="Enter your full name.." required>
             <br>
             <label><b>Mobile</b></label>
	         <input type="mobile" size="100" name="mobile"  pattern="[0-9]{10}" placeholder="0987654321" required> 
	         <br>
	         <label><b>E-mail</b></label>
	         <input type="email" size="100" name="email" placeholder="xyz@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> 
	         <br>
		     <textarea type="text" name="message" placeholder="Enter your message.........." rows="8" required></textarea> <br>
          </div>
		  <hr>
		    <br>
		    <br>
            <button type="submit" name="submit" id="sendBtn" size="100">Send</button>
            </form>
    </td>
<tr>   
   <td width="10%" align="left">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1146.3757659909234!2d80.70698591266775!3d5.963442141143623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1366c3211599d%3A0x6cac29b84fd047ee!2sSeacoast%20Sanctuary%20Beach%20Hotel!5e0!3m2!1sen!2slk!4v1601203699387!5m2!1sen!2slk" width="120%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
   </td>
</tr>
<tr>
   <td align ="left">
   <br>
   Email : seacoasthotels@seacoast.lk
   <br>
   Phone : 0112323232
   <br>
  </td>
</tr>
</table>
 
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
</body>
</html>

