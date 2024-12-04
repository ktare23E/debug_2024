<?php
    include_once '../components/connection.php';

    if(isset($_GET['login_btn'])){
        $username = $_POST['username'];
        $password = $_POST['hidden_password'];

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            session_destroy();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['isUser'] = true;

            header('../admin/dashboard.php');
        }
    }