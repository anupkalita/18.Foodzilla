
<?php
include "db_conn.php";

// Process to add new user into the database
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "SELECT * FROM `customer_details` WHERE `customer_name` = '$username'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_num_rows($result)){
        // to check if the username already exist or not
        if($row > 0){
            echo json_encode("Username Exist!");
            exit;
        }
    }
        // if username is not exist in the database
        $sql =  "INSERT INTO `customer_details` (`customer_id`, `customer_name`, `password`, `phone`, `address`, `signup_date`) VALUES (NULL, '$username', '$password', '$phone', '$address', CURRENT_TIME())";
        $result = mysqli_query($conn, $sql);

        $response = "Data Inserted";
    echo json_encode($response);
}

?>
