<?php
session_start();
if(!$_SESSION['admin']){
    header("location:login.php");
};
// session_start();
//     if(!$_SESSION['username']){
//         echo"unauthorised";
//         exit;
//     }

    include "db_conn.php";

// Process to change order status in database
    if(isset($_POST['order_id'])){
        $order_id = $_POST['order_id'];
        $status = $_POST['status'];

        $sql = "UPDATE `order_history` SET `status` = '$status' WHERE `order_id` = '$order_id'";
        $result = mysqli_query($conn, $sql);

    }

        echo json_encode($order_id . $status);

?>