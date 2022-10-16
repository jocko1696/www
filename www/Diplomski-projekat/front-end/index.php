<?php
    session_start();

    if(!isset($_SESSION['status'])){
        $_SESSION['status']='guest';

    }

    if(isset($_POST['continueAsGuest'])){
        $_SESSION['user']='guest';
        $_SESSION['status']='guest';

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name ="viewport"  content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Home | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/home.css>
</head>
<body>

<div class="full-display">
    <nav class="navbar">
        <div class="nav">

            <div class="logo-and-brand">
                <a class="href-logo" href="index.php">
               <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
                <p class="brand-text">Sarah</p>
                </a>
            </div>

            <div class="nav-items" id="nav-items">
                <div class="list">
                    <ul class="links-container">
                        <li class="link-item" id="clothing"><a href="clothing.php" class="link">Clothing</a></li>
                        <li class="link-item"><a href="about-us.php" class="link">About Us</a></li>
                        <li class="link-item"><a href="sarah-materials.php" class="link">Sarah materials</a></li>
                        <li class="link-item logo-link"><a href="login.php"><img  src="../images/img/user.png" alt=""></a></li>
                        <li class="link-item bag-link"><a href="#"><img  src="../images/img/bag.png" alt=""></a></li>

                    </ul>
                </div>

            </div>

        </div>
    </nav>
    <br>
    <br>
    <br>


    <div class="content">
        <h1 class="slide-left">Uniquely</h1> <br><h1 class="slide-left">you.</h1>
        <br>
        <p class="slide-left">Express your inner star. Live life with style.</p>
        <a class="links slide-left"  href="sarah-materials.php">Discover more</a>
        <a class="links slide-left" href="about-us.php">Contact</a>
    </div>

    <form class="form-cookie" action="" method="post">
    <div id="cookie-box" class="cookie-box">

        <div class="logo-for-sarah">
            <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
            <p class="brand-text">Sarah</p>
        </div>
        <p class="paragraph">Continue looking Sarah offer as a guest or log in or register and buy yourself piece of clothes.</p>
       <button class="submitBtn" type="submit" name="continueAsGuest" > <a   class="continueAsGuest">Continue as guest</a></button>
        <a href="login.php" class="logInOrRegister">Log in or create account</a>
    </div>
    </form>
</div>

<script src="../js/home.js"></script>

    <?php if(isset($_SESSION['user'])){
    include_once ("../back-end/session.php");

    } ?>


</body>
</html>
