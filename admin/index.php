<?php
@include '../config.php';

// Delete functionality
if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM enquiryform2 WHERE StudentName = '$delete_id'";
    mysqli_query($conn, $delete_query);
}

// Fetching data
$query = "SELECT * FROM enquiryform2";
$run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Delete Data From Database in PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header></header>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr class="heading">
            <th>Sl No</th>
            <th>Student Name</th>
            <th>Class</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Address</th>
            <th>Operation</th>
        </tr>
        <?php
        $i=1;
        if (mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                echo "
                    <tr class='data'>
                        <td>".$i++."</td>
                        <td>".$result['StudentName']."</td>
                        <td>
                            <a href='?delete_id=".$result['StudentName']."' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                        </td>
                    </tr>
                ";
            }
        }
        ?>
    </table>
</body>
</html>
