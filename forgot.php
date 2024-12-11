<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot.css">
    <title>Forgot Password page</title>
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
     <!--Forgot password page-->
     <div class="forgot">
        <form action="" method="post">
            <h1>Forgot Password</h1>
            <label for="">Email:- <span> *</span></label><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required><br>
            <label for="">New Password:- <span> *</span></label><br>
            <input type="password" name="password" id="password" placeholder="Enter Your New Password" required><br>
            <label for="">New Confirmpassword:- <span> *</span></label><br>
            <input type="password" name="Confirmpassword" id="Confirmpassword" placeholder="Enter Your New Confirmpassword" required><br>
            <button type="submit" name="btnforgot">Forgot</button>
        </form>
     </div>
</body>
</html>