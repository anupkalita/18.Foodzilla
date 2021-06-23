<?php

session_start();

// for admin logout
if(isset($_SESSION['admin'])){

    session_destroy();

    header('location:admin_login.php');

}

?>