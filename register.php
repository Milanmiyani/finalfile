
<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register page </title>
    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 40px;
    margin-bottom: 40px;
    background-color: #f2f2f2;
  }
  .register-box{
    width:55vw;
    height: auto;
    background-color: #ffff;
    text-align: center;
    align-items: center;
    border-radius: 10px;
 
  }
  .register-box img{
    margin-bottom: 20px;
  }
  .register-box form {
    justify-content: center;
  
  }
  .register-box form label{
    font-size: 20px;
  
  }
  .register-box form input{
    font-size: 14px;
    padding: 8px 20px;
    border: 1px solid #dadada;
    border-radius: 5px;
    width: 40vw;
    margin-top: 5px;
    margin-bottom: 5px;
    color: #818589;
  }
  #address{
    font-size: 14px;
    padding: 10px 20px;
    border: 1px solid #dadada;
    border-radius: 5px;
    width: 40vw;
    margin-top: 5px;
    margin-bottom: 5px;
    font-family: Arial, Helvetica, sans-serif;
  }
  #gender{
    font-size: 14px;
    padding: 10px 20px;
    border: 1px solid #dadada;
    border-radius: 5px;
    width: 40vw;
    margin-top: 5px;
    margin-bottom: 5px;
    font-family: Arial, Helvetica, sans-serif;
    color: #818589;
  }
  .register-box form button{
    font-size: 16px;
    padding: 7px 20px;
    border: 1px solid #dadada;
    border-radius: 5px;
    width: 20vw;
    background-color: #0096FF;
    color: white;
    margin-top: 18px;

  }
  .register-box .signup-link{
    font-size: 14px;
    padding: 10px 20px;
    margin-bottom: 20px;
  }
.register-box i{
    padding: 20px 20px;
    font-size: 25px;
}

.register-box i h4{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

@media (max-width:600px) {
    .register-box{
        width:80vw;
      }
      .register-box form label{
        font-size: 17px;
        color: grey;
      }
      .register-box form input{
        width: 60vw;
      }
      #address{
        width: 60vw;
      }
      #gender{
        width: 60vw;
      }
      .register-box form button{
        width: 30vw;
      }
}
    </style>
 
</head>
<body>
  <!--insert query--> 
  <?php
  if(isset($_POST["btnlogin"]))
  {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phoneno = $_POST["phoneno"];
    $dateofbrith = $_POST["date"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];

    $insert  = mysqli_query($conn,"insert into register(fullname,email,phoneno,dateofbrith,address,country,city,gender)
     values('$fullname','$email','$phoneno','$dateofbrith','$address','$country','$city','$gender')") or die (mysqli_error($conn));

  }
  ?>
  <?php if(isset($_POST["btnlogin"]))
  {
    header("Location: clientlogin.php");
  }
  ?>
  <div class="register-box">
    <i class="fa-solid fa-shirt"> <h4>Fashion Frenzy</h4> </i><br>
        <form action="" method="post" id="registerForm" onsubmit="return validateForm()">
            <label for="">Full Name</label><br>
            <input type="text" id="fullname" name="fullname" placeholder="Enter Your Full Name" required><br>
            <label for="">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br>
            <label for="">Phone No</label><br>
            <input type="text" id="phoneno" name="phoneno" maxlength="10" placeholder="Enter Your Phone No" required><br>
            <span class="error" id="phoneError"></span><br>
            <label for="">Date of Birth</label><br>
            <input type="date" id="date" name="date" required><br>
            <label for="">Address</label><br>
            <textarea name="address" id="address"  row="4"  placeholder="Enter Your Address " required></textarea><br>
            <label for="">Country</label><br>
            <input type="text" id="country" name="country" placeholder="Enter Your country" required><br>
            <label for="">City</label><br>
            <input type="text" id="city" name="city" placeholder="Enter Your city" required><br>
            <label for="">Gender</label><br>
            <input type="text" id="gender" name="gender" placeholder="Enter Your Gender" required><br>
            <label for="">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" required><br>
            <label for="">Confirm Password</label><br>
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter Your Confirm Password" required><br>
            <span class="error" id="passwordError"></span><br>
            <button type="submit" name="btnlogin" >Register</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="clientlogin.php">Sign In</a></p>
      
    </div>
   
    <script>
function validateForm() {
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let phoneno = document.getElementById("phoneno").value;
    let address = document.getElementById("address").value;
    let country = document.getElementById("country").value;
    let city = document.getElementById("city").value;
    let gender = document.getElementById("gender").value;
    let password = document.getElementById("password").value;
    let confirmpassword = document.getElementById("confirmpassword").value;

    let namePattern = /^[A-Za-z\s]+$/;
    let phonePattern = /^\d{10}$/;
    let addressPattern = /^[A-Za-z0-9\s,.-]+$/;
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!namePattern.test(fullname)) {
        alert("Full Name should contain only characters.");
        return false;
    }
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email.");
        return false;
    }
    if (!phonePattern.test(phoneno)) {
        alert("Phone number must be 10 digits only.");
        return false;
    }
    if (!addressPattern.test(address)) {
        alert("Address should contain only letters, digits, and basic punctuation.");
        return false;
    }
    if (!namePattern.test(country)) {
        alert("Country should contain only characters.");
        return false;
    }
    if (!namePattern.test(city)) {
        alert("City should contain only characters.");
        return false;
    }
    if (!namePattern.test(gender)) {
        alert("Gender should contain only characters.");
        return false;
    }
    if (password !== confirmpassword) {
        alert("Passwords do not match.");
        return false;
    }

    alert("Registration Successful! Redirecting to login page.");
    return true;
}
</script>
</body>
</html>