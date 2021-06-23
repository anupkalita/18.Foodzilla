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
            <li><a href="admin_dashboard.php"><i class="fas fa-chart-line"></i></i><span>Dashboard</span></a></li>
            <li><a href="admin_addfood.php" class="active"><i class="fas fa-hamburger"></i></i><span>Add Food</span></a></li>
            <li><a href="admin_updatefood.php"><i class="fas fa-hamburger"></i></i><span>Update Food</span></a></li>
            <li><a href="admin_orders.php"><i class="fas fa-list-alt"></i>Orders</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <div class="form-section">
        
        <form action="admin_addfood_process.php" method="post" enctype="multipart/form-data">
            
            <div class="form-input">
                <label for="food_name">Food Name:</label>
                <input type="text" name="food_name" id="food_name" required>
            </div>
            <div class="form-input">
                <label for="category_id">Category ID:</label>
                <select name="category_id" id="category_id" required>
                    <option value="1">1-Appetizer</option>
                    <option value="2">2-Continental</option>
                    <option value="3">3-Thali</option>
                    <option value="4">4-Biryani</option>
                    <option value="5">5-Desserts</option>
                </select>
            </div>
            <div class="form-input">
            <label for="category">Category:</label>
                <select name="category" id="category" required>
                    <option value="appetizer">Appetizer</option>
                    <option value="continental">Continental</option>
                    <option value="thali">Thali</option>
                    <option value="biryani">Biryani</option>
                    <option value="desserts">Desserts</option>
                </select>
            </div>
            <div class="form-input">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" required>
            </div>
            <div class="form-input">
                <label for="Image">Food Image:</label>
                <input type="file" name="image" id="image" required>
            </div>
            
            <input type="submit" name="submit" value="submit">
    
        </form>
    </div>





    <!-- Footer Section -->
    <!-- <footer>
        <p>Copyright &copy; 2021</p>
    </footer> -->

    <!-- JavaScript -->
    <!-- <script src="admin_dashboard.js"></script> -->
</body>
</html>
