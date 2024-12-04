<?php
    include_once '../components/connection.php';

    if(isset($_POST['update_product'])){
        $product_id = $_GET['product_id'];
        $product_name = $_POST['products_name'];
        $product_price = $_POST['product_price'];
        $product_type = $_POST['product_type'];

        

        $query = "UPDATE product SET product_name = '$product_name', product_price = '$product_price', product_type = '$product_type' WHERE product_id = $product_id";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:../admin/dashboard.php');
        }else{
            echo "Error";
            die();
        }
    }