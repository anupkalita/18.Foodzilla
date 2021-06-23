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

        $sql = "SELECT * FROM `order_history` ORDER BY date desc";

        $result = mysqli_query($conn, $sql);
        $arr = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($arr, $row);
        }

        echo json_encode($arr);

?>