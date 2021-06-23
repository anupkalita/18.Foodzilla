
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="signup_style.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a4d05c5536.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    
    <title>Login Page</title>
    <style>
        <?php include "signup_style.css" ?>
    </style>
</head>
<body>
    <div id="login-page">

        <div id="form-section">
            <h1>Login to Foodzilla</h1>
            <!-- <p>Log in to your account and manage your digital world</p> -->

            <!-- form -->
            <form action="login_process.php" method="POST" id="form">
                <div>
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username" required>
                </div>                
                <div>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required>
                </div> 
                <input type="submit" value="Log In" name="submit">   
                
                <!-- or-section -->
                <div id="hr-rule">
                    <hr class="one">
                    <span class="mid-text">or</span>
                    <hr class="two">
                </div>
            </form>

            <div id="sign-up">
                <div>
                    <p>Don't have an account?</p>
                    <a href="signup.php">Signup Here</a>
                </div>

                <div>
                    <p>Are you Admin?</p>
                    <a href="admin_login.php">Login Here</a>
                </div>
            </div>
        </div>

        <div id="carousel-section">
            <img src="./img/login.png" alt="food-img">
            <div class="carousel-text">
                <h1>F<i class="fas fa-cookie-bite"></i><i class="fas fa-cookie"></i>dzilla</h1>
                <p>Giving your Hunger a new Option</p>
            </div>
        </div>

    </div>
</body>
</html>