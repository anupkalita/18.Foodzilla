<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "db_conn.php";

if(isset($_POST['totalFood'])){
    $total_price = $_POST['totalPrice'];
    $customer_name = $_POST['customer_name'];
    $total_food = $_POST['totalFood'];
    $status = $_POST['status'];

    // To retrive customer address from database
    $sql = "SELECT address FROM `customer_details` WHERE customer_name = '$customer_name'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $address = $row['address'];
    }


    // To store ordered food details in order_history
    $sql = "INSERT INTO `order_history`(`order_id`, `customer_name`, `total_food`, `total_price`, `date`, `status`, `address`) VALUES (NULL,'$customer_name','$total_food','$total_price',CURRENT_TIME(),'$status', '$address')";

    mysqli_query($conn, $sql);



    // To remove stored ordered food details from cart_history
    $sql = "DELETE FROM `cart_history` WHERE `customer_name` = '$customer_name'";

    mysqli_query($conn, $sql);
}

?>