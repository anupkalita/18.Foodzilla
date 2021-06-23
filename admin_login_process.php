<?php
session_start();
if(!$_SESSION['admin']){
    header("location:login.php");
};

include "db_conn.php";

if(isset($_POST['username'])){
    $admin_name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin_details` WHERE `admin_name` = '$admin_name' && `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
        if($row == 1){
            echo "Success Login";
            $_SESSION['admin'] = $admin_name;
            header('Location:admin_dashboard.php'); 
        }else{
            echo "<script>alert('invalid credentials');
                location.href('admin_login.php');
            </script>";
        }

}

?>
