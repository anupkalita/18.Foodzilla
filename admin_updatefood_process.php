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

        
    // Process to delete food item
    if(isset($_POST['food_id'])){
        $food_id = $_POST['food_id'];

        $sql = "DELETE FROM `food_items` WHERE `food_id` = '$food_id'";

        mysqli_query($conn, $sql);
        
    }

    // Process to fetch all food items
    else{
        $sql = "SELECT food_items.food_id, food_items.food_name, food_items.category_id, food_items.price, food_items.img_dest, food_category.category_name
        FROM food_items
        INNER JOIN food_category ON food_items.category_id = food_category.category_id ORDER BY food_id DESC";

        $result = mysqli_query($conn, $sql);
        $arr = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($arr, $row);
        }

        echo json_encode($arr);
    }

?>