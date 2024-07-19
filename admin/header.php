<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>


  <nav>
    <div class="sidebar-button">
      <i class="bx bx-menu sidebarBtn"></i>
      <span class="dashboard"
        >Welcome
        <?php echo $_SESSION['admin_name'] ?></span
      >
    </div>

    <div>
      <a href="logout.php">Logout</a>
    </div>
  </nav>

