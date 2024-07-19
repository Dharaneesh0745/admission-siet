<?php

@include '../config.php';

session_start();

if(isset($_POST['submit'])){

   $UserEmailId = $_POST['UserEmailId'];
   $UserPassword = $_POST['UserPassword'];

   $select = " SELECT * FROM admin WHERE UserEmailId = '$UserEmailId' && UserPassword = '$UserPassword' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['UserType'] == 'admin'){

         $_SESSION['admin_name'] = $row['UserName'];
         header('location:home.php');

      } else {

         echo 'You dont have the access to admin page.';
      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="UserEmailId" required placeholder="enter your email">
      <input type="password" name="UserPassword" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>