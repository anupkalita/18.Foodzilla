<?php

    session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a4d05c5536.js" crossorigin="anonymous"></script>
    <title>Foodzilla | Cart</title>
    <style>
        <?php include "style.css" ?>
        <?php include "cart.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1><span>F<i class="fas fa-cookie-bite"></i><i class="fas fa-cookie"></i>d</span>zilla</h1>
        </div>
        
        <ul id="nav">
            <li><a href="index.php"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="cart.php" class="active"><i class="fas fa-cart-arrow-down"></i><span>My Cart</span></a></li>
            <li><a href="orders.php"><i class="fas fa-clipboard-list"></i><span>My Orders</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <h1 style="text-align:center"><span id="session-variable" class="session-hidden"><?php echo $_SESSION['username']?><span></h1>
    <!-- cart section -->
    <div id="cart">
        <!-- cart items section -->
        <div id="cart-section" >
            <!-- <div class="cart-item">
                <div class="cart-food-img">
                    <img src="" alt="">
                </div>
                <div class="cart-food-details">
                    <h2></h2>
                    <p></p>
                    <p>Qty: 
                        <input type="number" name="num" value="" id="quantity" min="1" max="5">
                    </p>
                    <button id="cart-remove-btn">Remove</button>
                    <span id="food-id"></span>
                </div>
            </div> -->
        </div>

        <!-- order summary -->
        <div id="order-summary-div">
            <div id="order-summary">
                <h3>Order Summary</h3>
                <hr>
                <p>Cart Subtotal: </p>
                <p>Delivery Fees: </p>
                <hr>
                <h4>Total: </h4>
                <div id="checkout">
                    <button id="checkout-btn">Checkout</button>
                </div>
            </div>
        </div>

    </div>


    <!-- Footer Section -->
    <!-- <footer>
        <p>Copyright &copy; 2021</p>
    </footer> -->

    <script src="cart.js"></script>
</body>
</html>