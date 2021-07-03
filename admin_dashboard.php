<?php
    session_start();

if(!$_SESSION['admin']){
    header("location:login.php");
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
    <script src="https://kit.fontawesome.com/a4d05c5536.js" crossorigin="anonymous"></script>
    <title>Foodzilla | Admin</title>
    <style>
        <?php include "admin.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1><span>F<i class="fas fa-cookie-bite"></i><i class="fas fa-cookie"></i>d</span>zilla</h1>
        </div>
        
        <ul id="nav">
            <li><a href="admin_dashboard.php" class="active"><i class="fas fa-chart-line"></i></i><span>Dashboard</span></a></li>
            <li><a href="admin_addfood.php"><i class="fas fa-hamburger"></i></i><span>Add Food</span></a></li>
            <li><a href="admin_updatefood.php"><i class="fas fa-hamburger"></i></i><span>Update Food</span></a></li>
            <li><a href="admin_orders.php"><i class="fas fa-list-alt"></i>Orders</span></a></li>
            <li><a href="admin_logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <h1 class="admin-greeting">ADMIN DASHBOARD</h1>

    <!-- dasboard section -->
    <div id="dashboard" class="container">
        <!-- <div class="dashboard-item">
            <h2>Total Orders</h2>
            <p></p>
        </div>
        <div class="dashboard-item">
            <h2>Total Food Items</h2>
            <p></p>
        </div>
        <div class="dashboard-item">
            <h2>Total Customers</h2>
            <p></p>
        </div>
        <div class="dashboard-item">
            <h2>Total Revenue</h2>
            <p><i class="fas fa-rupee-sign"></i> </p>
        </div> -->
    </div>



    <!-- Footer Section -->
    <!-- <footer>
        <p>Copyright &copy; 2021</p>
    </footer> -->

    <!-- JavaScript -->
    <script src="admin_dashboard.js"></script>
</body>
</html>
