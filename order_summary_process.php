<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "db_conn.php";

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];

    $sql = "SELECT cart_history.food_id,cart_history.quantity, food_items.price
    FROM cart_history
    INNER JOIN food_items ON cart_history.food_id = food_items.food_id
    WHERE cart_history.customer_name = '$username';";

    $result = mysqli_query($conn, $sql);
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr, $row);
    }

    echo json_encode($arr);
}

?>