<?php

session_start();
if(!$_SESSION['admin']){
    header("location:login.php");
};

include "db_conn.php";

// Process to add food image and details
if(isset($_POST["submit"])){

    $food_name = $_POST['food_name'];
    $category_id = $_POST['category_id'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $fileName = $_FILES["image"]["name"];

    $random_number = rand(111,999);

    $destination = "./img/$category/".$random_number.$fileName;
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $destination);

    $sql = "INSERT INTO `food_items`(`food_id`, `food_name`, `category_id`, `price`, `img_dest`) VALUES (NULL,'$food_name','$category_id','$price','$destination')";
    $result = mysqli_query($conn, $sql);

    header("location:admin_updatefood.php");
    
    mysqli_close($conn);
}

?>