<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Navbar Styling */
.navbar {
    background-color: #f8f9fa;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

h1 {
    font-size: 24px;
    color: #333;
}

.nav-part2 {
    display: flex;
    align-items: center;
    gap: 20px;
}

.nav-part2 a {
    text-decoration: none;
    color: #333;
    font-size: 18px;
}

.dropdown {
    position: relative;
}

.dropdown h1{
    text-decoration: none;
    color: #333;
    font-size: 18px;
    font-weight:normal;
}

.dropdown-contact {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex-direction: column;
    gap: 10px;
    padding: 10px;
    border-radius: 5px;
    width: 74px;
}

.dropdown:hover .dropdown-contact {
    display: flex;
}

#menuIcon {
    display: none;
    font-size: 24px;
    cursor: pointer;
}

/* Responsive Design */
@media (max-width: 600px) {
    .nav-part2 {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 4px;
        width: 30vw;
    }
    .nav-part2.active {
        display: flex;
    }

    #menuIcon {
        display: block;
    }
    h1 {
    font-size: 4vw;
    }
    .navbar{
        padding: 2vw 4vw;
    }
    #menuIcon {
        font-size:4vw;
    }
    
}
    </style>
</head>
<body>
    <div class="navbar">
        <nav>
            <h1>FASHION FRENZY</h1>
            <div class="nav-part2" id="navPart2">
                <a href="">Home</a>
                <a href="">Contact</a>
                <a href="">About us</a>
                <a href="">Blog</a>
                <div class="dropdown">
                    <h1>Account</h1>
                    <div class="dropdown-contact">
                        <a href="clientlogin.php">LogIn</a>
                        <a href="clientlogin.php">LogOut</a>
                    </div>
                </div>
            </div>
            <i class="fa-solid fa-bars" id="menuIcon"></i>
        </nav>
    </div>

    <script>
        // Toggle menu visibility on mobile
const menuIcon = document.getElementById("menuIcon");
const navPart2 = document.getElementById("navPart2");

menuIcon.addEventListener("click", () => {
    navPart2.classList.toggle("active");
});
    </script>
</body>
</html>