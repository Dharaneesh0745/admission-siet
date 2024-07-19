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
  <img src="logo.png" alt="">
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
        <label class="palceholder" for="userName">User Email</label>
        <input class="form-control" name="UserEmailId" id="userName" type="email" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="UserPassword" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>

      <button name="submit" type="submit" id="login">Login</button>
    </form>
  </div>
</div>
    </div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</body>
</html>
