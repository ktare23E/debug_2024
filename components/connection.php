<?php
    $conn = mysqli_connect('localhost','roots','','debug_2023');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}