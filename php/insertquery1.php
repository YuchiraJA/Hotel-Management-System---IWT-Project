<?php require_once('inc/connection.php'); 
?>
<?php

   /*
      INSERT INTO table_name (
         colum1, colum2, etc)
      ) VALUES (
          value1, value2, etc
      )

    */

     $full_name = $_POST['full_name'] ;
     $mobile = $_POST['mobile'];
     $email = $_POST['email'] ;
     $message = $_POST['message'];

     
     $query = "INSERT INTO contectus
         (full_name, mobile, email, message)VALUES ('{$full_name}', '{$mobile}', '{$email}', '{$message}')";

     $result = mysqli_query($connection, $query);

     if ($result) {
     	echo "1 Record added";
      header('Location: home.php');
     } else {
     	echo "Database query failed. ";
     }
 

?>
<html> 
<body>
</body>
</html>

<?php mysqli_close($connection) ?>