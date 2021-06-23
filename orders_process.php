<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

    include "db_conn.php";

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM order_history  WHERE customer_name = '$username'";

        $result = mysqli_query($conn, $sql);
        $arr = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($arr, $row);
        }

        echo json_encode($arr);
    }

?>