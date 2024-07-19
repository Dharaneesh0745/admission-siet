<?php

@include '../config.php';

if(isset($_POST['submit'])){

   $UserName = $_POST['UserName'];
   $UserEmailId = $_POST['UserEmailId'];
   $UserPassword = $_POST['UserPassword'];
   $UserType = "admin";

   $select = " SELECT * FROM admin WHERE UserEmailId = '$UserEmailId' && UserPassword = '$UserPassword' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      $insert = "INSERT INTO admin(UserName, UserEmailId, UserPassword, UserType) VALUES('$UserName','$UserEmailId','$UserPassword','$UserType')";
      mysqli_query($conn, $insert);
      header('location:home.php');
   }

};


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="card" style="margin-top: 150px">
<div class="logo text-center">
  <h1>Logo</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login to your account</h2>
    <form method="post" action="" id="formvalidate">
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class="input-group">
        <label class="palceholder" for="userName">User Name</label>
        <input class="form-control" name="UserName" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userName">User Email</label>
        <input class="form-control" name="UserEmailId" id="userName" type="email" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="UserPassword" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>

      <button name="submit" type="submit" id="login">Register</button>
      <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
  </div>
</div>
    </div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</body>
</html>
