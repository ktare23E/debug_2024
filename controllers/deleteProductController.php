<?php   
    include_once '../components/connection.php';


    if(isset($_POST['ids'])){
        $product_id = $_GET['ids'];

        $query = "DELETE FROM product WHERE product_type = 'test_product'";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:../admin/dashboard.php');
            exit();
        }
    }else{
        echo "uyy error napd";
        die();
    }