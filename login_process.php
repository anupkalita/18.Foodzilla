<?php
session_start();
include "db_conn.php";

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `customer_details` WHERE `customer_name` = '$username' && `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
        if($row == 1){
            echo "Success Login";
            $_SESSION['username'] = $username;
            header('Location:index.php'); 
        }else{
            echo "<script>alert('invalid credentials');
                location.href('login.php');
            </script>";
        }

}

?>
