
<?php 

//check for form submisson
if (isset($_POST['submit'])) {

       $errors = array();

   // check if user=username and password has been entered
   if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
       $errors[] = 'Username is Mission / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
       $errors[] = 'Password is Mission / Invalid';
     }


//check if there any errors in the form
     if (empty($errors)) {

       //save username and password into variables
       $email    = $_POST['email'];
       $password = $_POST['password'];
       $hashed_password = sha1($password);


       //prepare database query
       $query = "SELECT * FROM user
                    WHERE email = '{$email}'
                    AND password = '{$hashed_password}' 
                    LIMIT 1";

       $result_set = mysqli_query($connection, $query);

       if($result_set) {
              // query successful

              if (mysqli_num_rows($result_set) == 1) {
                     // valid user found
                     //redirect to users.php
                     header('Location: users.php');

              } else{
                     // username and password invalid
                     $errors[] = 'Invalid Username / Password' ;
              }
         } else{
               $errors[] = 'Database query faild';
       }
      }
   }
?>

