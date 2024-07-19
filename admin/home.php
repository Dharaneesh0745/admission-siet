<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/admission.css" />
    <link rel="stylesheet" href="styles/admission.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Page</title>
    <style>
      .container {
        max-width: 1200px;
        margin-left: 280px;
        padding: 20px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }

      table,
      th,
      td {
        border: 1px solid #ccc;
      }

      th,
      td {
        padding: 10px;
        text-align: left;
      }

      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <?php include 'sidebar.html'; ?>
    <!--- Start Navbar --->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Welcome <?php echo $_SESSION['admin_name'] ?></span>
      </div>

      <div>
        <a href="logout.php">Logout</a>
      </div>
      
    </nav>
    <div class="container">
      <h1>Student Analytics</h1>
      <table id="analytics-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>EMIS ID</th>
            <th>DOB</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    fetch("fetch_data.php")
      .then((response) => response.json())
      .then((data) => {
        const tableBody = document.querySelector("#analytics-table tbody");
        data.students.forEach((student) => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td>${student.StudentName}</td>
            <td>${student.StudentMobileNo}</td>
            <td>${student.StudentEmailId}</td>
            <td>${student.EmisId}</td>
            <td>${student.dob}</td>
            <td>
  <a href='delete.php?delete_id=${student.id}' onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
</td>

          `;
          tableBody.appendChild(row);
        });
      })
      .catch((error) => {
        console.error("Error fetching data:", error);
      });
  });
</script>
  </body>
</html>
