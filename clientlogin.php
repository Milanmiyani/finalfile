<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
    background-color: #f2f2f2;
  }
  .login-box{
    width:50vw;
    height: auto;
    background-color: #ffff;
    text-align: center;
    align-items: center;
    border-radius: 10px;
  }
  .login-box img{
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .login-box form {
    justify-content: center;
  
  }
  .login-box form label{
    font-size: 20px;
    
  }
  .login-box form input{
    font-size: 14px;
    padding: 8px 20px;
    border: 1px solid #dadada;
    border-radius: 5px;
    width: 35vw;
    margin-top: 5px;
    margin-bottom: 5px;
  }
  .login-box form button{
    font-size: 16px;
    padding: 7px 20px;
    border: 1px solid #dadada;
    border-radius: 5px;
    width: 20vw;
    background-color: green;
    color: white;
    margin-top: 18px;

  }
  .login-box .signup-link{
    font-size: 14px;
    padding: 10px 20px;
    margin-bottom: 20px;
  }
.login-box i{
    padding: 20px 20px;
    font-size: 22px;
}

.login-box i h4{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
@media (max-width:600px) {
    .login-box{
        width:80vw;
      }
      .login-box form label{
        font-size: 19px;
        color: grey;
      }
      .login-box form input{
        width: 60vw;
      }
      #address{
        width: 60vw;
      }
      .login-box form button{
        width: 30vw;
      }
}
</style>
    <title>Login Page  </title>
</head>
<body>
    <div class="login-box">
    <i class="fa-solid fa-shirt"> <h4>Fashion Frenzy</h4> </i><br>
        <form action="" method="post" id="loginForm">
            <label for="">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br>
            <label for="">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" required><br>
            <button type="submit" name="btnlogin">Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="register.php">Sign Up</a></p>
    </div>
   <?php
   if (isset($_POST["btnlogin"])) {
      header("Location: index.php");
     }
   ?>
    
</body>
</html>