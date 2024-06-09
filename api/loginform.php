<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
</head>

<body>

    <?php
    if (isset($_COOKIE['login_fail'])) {
        echo "Login form is blocked 10 minutes!";
    } else {

    ?>
        <div id="login-body">
            <div class="wrapper">
                <form action="../actions/login-user.php" method="post">
                    <h1>Login Form</h1>
                    <div class="login-input-box">
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div>
                    <div class="login-input-box">
                        <input type="password" placeholder="Enter Your Password" name="password" required>
                    </div>
                    <div class="remember-forgot">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forget Password?</a>
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                    <div class="register-link">
                        <p>Aren't you a member? <a href="registerform.php">Register</a> </p>
                    </div>
                </form>
            </div>
        </div>
    <?php

    } //else
    ?>
</body>

</html>