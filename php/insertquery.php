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

     $first_name = $_POST['first_name'] ;
     $last_name = $_POST['last_name'] ;
     $email = $_POST['email'] ;
     $password = $_POST['password'];
     $is_deleted = 0;

     $hashed_password = sha1($password);
     
     $query = "INSERT INTO user
         (first_name, last_name, email, password, is_deleted)VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', {$is_deleted})";

     $result = mysqli_query($connection, $query);

     if ($result) {
     	echo "1 Record added";
      header('Location: login.php');
     } else {
     	echo "Database query failed. ";
     }
 

?>
<html> 
<body>
</body>
</html>

<?php mysqli_close($connection) ?>