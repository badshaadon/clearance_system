<?php
    $con = mysqli_connect("localhost","u","p","clearance_system");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>