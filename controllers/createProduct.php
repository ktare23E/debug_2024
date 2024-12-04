<?php
    include_once './components/connection.php';

    echo "Yehey another error!";
    die();

    if(isset($_GET['create_product'])){
        $product_name = $_GET['product_name'];
        $product_price = $_POST['product_price'];
        $product_type = $_POST['product_type'];

        $product_price += 10;
        $query = "INSERT INTO products (product_type,product_price,product_name)
                        VALUES('product_name',$product_price,'$product_type')";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:../admin/dashbard.php');
        }else{
            echo "Error ka";
        }
    }else{
        echo "uyy error napd";
        die();
    }