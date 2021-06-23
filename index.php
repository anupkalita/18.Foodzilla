<?php
    session_start();

if(!$_SESSION['username']){
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
    <title>Foodzilla</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1><span>F<i class="fas fa-cookie-bite"></i><i class="fas fa-cookie"></i>d</span>zilla</h1>
        </div>
        <!-- <div id="logo">
            <h1>G<i class="fas fa-cookie-bite"></i>od <span>F<i class="fas fa-cookie"></i>od</span></h1>
        </div> -->
        
        <ul id="nav">
            <li><a href="index.php" class="active"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="cart.php"><i class="fas fa-cart-arrow-down"></i><span>My Cart</span></a></li>
            <li><a href="orders.php"><i class="fas fa-clipboard-list"></i><span>My Orders</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <!-- showcase-section -->
    <section id="showcase-section">
        <div id="showcase-text">
            <h3>Hello, <span id="session-variable"><?php echo $_SESSION['username']?><span></h3>
            <h2>Are You Hungry?</h2>
            <h3>Don't Wait!</h3>
            <p>Let start to order food now!</p>
        </div>
    </section>

    <!-- category-section -->
    <section id="category-section" class="container">
        <h2>CATEGORY</h2>
        <div class="underline"></div>
        <div id="category-options">
            <button class="btn all">All</button>
            <button class="btn appetizer">Appetizer</button>
            <button class="btn continental">Continental</button>
            <button class="btn thali">Thali</button>
            <button class="btn biryani">Biryani</button>
            <button class="btn dessert">Dessert</button>
        </div>
        <div id="display-category">
            <!-- <div class="item">
                <img src="" alt="">
                <div class="item-desc">
                    <h3></h3>
                    <p><i class="fas fa-rupee-sign"></i> </p>
                </div>
                <div>
                    <button class="item-btn"><i class="fas fa-cart-arrow-down"></i> </button>
                    <span id="food-id"></span>
                </div>
            </div>   -->
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>Copyright &copy; 2021</p>
    </footer>

    <!-- JavaScript -->
    <script src="home_app.js"></script>
</body>
</html>
