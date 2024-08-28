<?php

@include 'config.php';

if(isset($_POST['StudentMobileNo']))
{
    $StudentMobileNo = $_POST['StudentMobileNo'];
    $result = $conn->query(" SELECT * FROM umis WHERE StudentMobileNo = '$StudentMobileNo' ");

    if($result->num_rows > 0){
        echo "<span id = 'avail' style='color:red;'>"."Only One Registration Per Mobile Number!"."</span>";

    }else{
        echo "<span id = 'avail' style='color:green;'>"."Available"."</sapn>";
    }
}
?>