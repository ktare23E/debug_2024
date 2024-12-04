<?php   
    include_once '../components/connection.php';
    session_start();
    session_destroy();
    header('../index.php');