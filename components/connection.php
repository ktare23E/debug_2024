<?php
    $conn = mysqli_connect('localhost','groot','','debug_2023');

    // Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}