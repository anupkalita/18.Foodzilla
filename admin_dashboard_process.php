<?php

session_start();
if(!$_SESSION['admin']){
    header("location:login.php");
};

    include "db_conn.php";
    
    // object to store required data
    $obj = new stdClass;

    // Ṭo fetch total no. of customers
    $sql = "SELECT `customer_id` FROM `customer_details`";
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($result);

    $obj->total_customer = "$rows";

    // Ṭo fetch total no. of orders
    $sql = "SELECT order_id FROM `order_history`";
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($result);

    $obj->total_orders = "$rows";

    // Ṭo fetch total no. of Food-items
    $sql = "SELECT food_id FROM `food_items`";
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($result);

    $obj->total_food = "$rows";

    // Ṭo fetch total revenue
    $sql = "SELECT total_price FROM `order_history` WHERE `status` = 'delivered'";
    $result = mysqli_query($conn, $sql);

    $get_revenue = 0;

    while($rows = mysqli_fetch_array($result)){
        $get_revenue = $get_revenue + $rows['total_price'];
    }

    $obj->revenue = "$get_revenue";


    echo json_encode($obj);

?>