<?php

if (!isset($_SESSION['itemsInBag'])) {
    $_SESSION['itemsInBag'] = 0;
}


?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href=../css/header.css>
    </head>
<header>
        <div class=" header-container ">
            <nav class="header-nav">
                <div class="list">
                    <ul class="links-container">

                        <li class="link-item " id="id1"><a href="index.php" class="link">Home</a></li>
                        <li class="link-item" id="id2"><a href="about-us.php" class="link">About us</a></li>
                        <li class="link-item" id="id3"><a href="sarah-materials.php" class="link">Sarah materials</a></li>
                        <?php
                        if(isset($_SESSION['status'])){
                        if($_SESSION['status']=='user'){
                        ?>
                        <li class="link-item active-link" id="id4"><a href="clothing.php" class="link">Clothing</a></li>
                        <?php }} ?>
                    </ul>

                    <div class="logo-and-brand">
                        <a class="href-logo" href="index.php">
                        <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
                        <p class="brand-text">Sarah</p>
                        </a>
                    </div>

                    <?php
                    if (isset($_SESSION['status'])) {
                        if ($_SESSION['status'] == 'user') { ?>
                            <ul class="links links-for-user">
                                <li class="link-item "><a href="cart.php"
                                                          class="username-header"><?php echo $_SESSION['user'] ?></a>
                                </li>
                                <li class="link-item bag-link">
                                    <a href="cart.php">
                                        <img src="../images/img/bag.png" alt="">
                                        <span id="itemsInBag"
                                              class="circle"><?php echo $_SESSION['itemsInBag']; ?></span>
                                    </a>

                                </li>
                                <li class="link-item search search-for-user" id="search-bar">
                                    <input class="search-text search-text-user" id="search" type="text"
                                           placeholder="Search item...">
                                    <button class="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </li>
                            </ul>

                        <?php } else {
                            ?>
                            <ul class="links-container">
                                <li class="link-item search" id="search-bar">
                                    <input class="search-text" id="search" type="text" placeholder="Search item...">
                                    <button class="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </li>
                            </ul>
                        <?php }
                    } ?>


                </div>
            </nav>
        </div>
</header>
        <script src="../js/header.js"></script>