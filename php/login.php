<?php require_once('inc/connection.php');
?>


<?php include('loginform.php');
?>



<!DOCTYPE html>
<html> 
<!--Header-->
<head>
     <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"  href="../css/headerStyles.css">
	<link rel="stylesheet" type="text/css"  href="../css/footerStyles.css">
	<link rel="stylesheet" type="text/css"  href="../css/loginStyles.css">
	
</head>

<body>
<div class="header">
  <table width="100%">
    <tr>
      <td width="8%">
        <img class="logo" src="../images/logo.png" width="100" height="100" alt="Seacoatlogo">
      </td>
      <td align = "left">
        <h1 class ="header_title">Seacoast Hotel</h1>
      </td>
      <td width="30%" align="right" >
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
     <table id="border2" width="50%" height="5px" align="center">
       <tr>
         <td>
            <p id="demo"></p>
            <script type="text/javascript" src="../js/loginScript.js"></script>
         </td>
       </tr>
     </table>

     <table id="border1" width="50%" align="center">
       <tr>
         <td>
           <form action="login.php" method="post">
             <center><h2>Login</h2></center>
              <?php
                          if(isset($errors) && !empty($errors)){
                            echo '<p class="error">Invalid Username/ Password</p>';
                          }

                     ?>
             <div class="container">
               <label><b>Email</b></label>
               <input type="email"  placeholder="Enter Email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
               <label><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="password" required>
               <center><button type="submit" name="submit">Login</button></center>
	           <br>
               <a href="#">Admin Login</a>
             </div>
           </form>
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

<?php mysqli_close($connection);
?>