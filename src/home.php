<?php
session_start();

$cookieUser=isset($_COOKIE["user"]);
$cookieRole=isset($_COOKIE["role"]);
$cookieUserID=isset($_COOKIE["id"]);

$sessionUser=isset($_SESSION["user"]);
$sessionRole = isset($_SESSION["role"]);
$sessionUserID= isset($_SESSION["id"]);


if ($cookieUserID && !$sessionUserID) {
    $currentUserID = $_COOKIE["id"];
} else if (!$cookieUserID && $sessionUserID) {
    $currentUserID = $_SESSION["id"];
} else {
    $currentUserID= null;
}


if(isset($_GET["error"])){
    echo "<script>window.alert('This email is already taken!');</script>";
}

if(isset($_GET["errorEmail"])){
    echo "<script>window.alert('Email address not found!');</script>";
}
if(isset($_GET["errorPassword"])){
    echo "<script>window.alert('Password is mistake!');</script>";
}


if(isset($_COOKIE["user"]) || isset($_SESSION["user"])){
    echo "<script>document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#formContainer').style.display = 'none';
    });</script>";
}



if ((isset($_COOKIE["role"]) && $_COOKIE["role"] == "admin") || (isset($_SESSION["role"]) && $_SESSION["role"] == "user")) {
    // header("Location: admin.php");
    //exit();
    echo "<script>document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#addCar').style.display = 'none';
    });</script>";
}




?>

<!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moonlight Software</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
<header style="background-color: rgba(204, 34, 34, 0.96)">
    <nav class="navbar" style="width: 100%;">
        <ul>
            <div>
                <li class="logo-item">
                    <a href="home.php">
                        <img src="assets/logo.png" alt="Logo" class="logo">
                        <li><a href="#home">Moonlight Software Inc.</a></li>
                    </a>
                </li>
            </div>
            <div>
            <li><a href="#about">About Us</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            </div>
        </ul>
    </nav>
</header>

<section id="home" class="hero">
    <div class="overlay">
        <h1 class="fade-in hbc_rent">HI, WELCOME TO MOONLIGHT SOFTWARE</h1>
        <h3 class="fade-in rent_car_text">It's the place, that you are looking for</h3>
    </div>

        <a href="#home" class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
        </a>
</section>

<section id="about" class="hero">
    <div class="overlay">
        <h1 class="fade-in hbc_rent">ABOUT US</h1>
        <h3 class="fade-in rent_car_text">Moonlight Software specializes in creating innovative games and robust software solutions. Founded by Abdulkadir Bekman, a Marmara University graduate in German Management Information Systems, and Hasan Can Cörüt, a final-year Software Engineering student at Haliç University, our team combines academic excellence with practical expertise. We are passionate about developing engaging gaming experiences and efficient software tools tailored to our clients' needs. Committed to quality and innovation, Moonlight Software strives to transform ideas into cutting-edge digital solutions.</h3>
    </div>
</section>


<section id="projects" class="hero">
    <div class="overlay">
        <h1 class="fade-in hbc_rent">PROJECTS SECTION</h1>
        <h3 class="fade-in rent_car_text">Welcome to the second section</h3>
    </div>
</section>

<section id="contact" class="hero">
    <div class="overlay">
        <h1 class="fade-in hbc_rent">CONTACT SECTION</h1>
        <h3 class="fade-in rent_car_text">Welcome to the second section</h3>
    </div>
</section>

<footer>
    <p>Moonlight Software Inc. - All Rights Reversed</p>
</footer>

<script src="script.js"></script>
</body>
</html>

