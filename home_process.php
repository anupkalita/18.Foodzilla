<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

// database connection
include "db_conn.php";

// Retrive food items from database
$sql = "SELECT food_items.food_id, food_items.food_name, food_items.price, food_items.img_dest, food_items.category_id, food_category.category_name FROM food_items INNER JOIN food_category ON food_items.category_id=food_category.category_id";
$result = mysqli_query($conn, $sql);

// array to store each row
$arr = array();
while($row = mysqli_fetch_assoc($result)){
    array_push($arr, $row);
}

// convert array into json format
echo json_encode($arr);

?>