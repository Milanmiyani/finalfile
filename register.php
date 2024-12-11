<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register Page</title>
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
     <!--register-->
    <div class="register">
        <form action="" method="post">
            <h1>Registration Page</h1>
            <label for="">First Name:-<span> *</span></label><br>
            <input type="text" name="fistname" id="fistname" placeholder="Enter Your First Name" required><br>
            <label for="">Last Name:-<span> *</span></label><br>
            <input type="text" name="lastname" id="lastname" placeholder="Enter Your Last Name" required><br>
            <label for="">Email:-<span> *</span></label><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required><br>
            <label for="">Phone No:-<span> *</span></label><br>
            <input type="text" name="phoneno" id="phoneno" placeholder="Enter Your phoneno" required ><br>
            <label for="">Date Of Birth:-<span> *</span></label><br>
            <input type="date" name="date" id="date" ><br>
            <label for="">Address:-<span> *</span></label><br>
            <input type="text" name="address" id="address" placeholder="Enter Your Address" required><br>
            <label for="">Gender:-<span> *</span></label><br>
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required><br>
            <label for="">Password:-<span> *</span></label><br>
            <input type="password" name="password" id="password" placeholder="Enter Your passowrd" required><br>
            <label for="">Confirmpassword:-<span> *</span></label><br>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter Your Confirmpassword" required><br>
            <button type="submit" name="btnsubmit">Submit</button>

        </form>
    </div>
</body>
</html>