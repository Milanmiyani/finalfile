<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>
    <!--Header-->
    <div class="navbar">
        <nav>
            <div class="logo">
                <img src="image/4.png" alt="">
             </div>
             <div class="link">
            <a href="index.php">HOME</a>
            <a href="#">CATEGORY</a>
            <a href="#">ABOUT</a>
            <a href="#">CONTACT</a>
            <a href="login.php">LOGIN</a>
             </div>
        </nav>
     </div>
     <!--login page-->
     
    <div class="login">
        <form action="" method="post">
            <h1>Log In</h1>
            <label for="">Email:- <span> *</span></label><br>
            <input type="email" name="email" id="email" placeholder="Enter Email" required><br>
            <label for="">Password:- <span> *</span></label><br>
            <input type="password" name="password" id="password" placeholder="Enter password" required><br>
            <a id="a1" href="forgot.php">Forgot Password?</a><br>
            <button type="submit" id="login" name="btnlogin">LogIn</button><br>
            <p>Don't Have an Account? <a id="a2"href="register.php">Register</a></p>

        </form>
    </div>
</body>
</html>