<?php session_start();?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Clothing | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/clothing.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">

    </script>
</head>
<body>
<div class="full-display">
    <nav class="navbar">
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>

        <ul class="nav-list tabs">

            <li  data-tab-target="#just-in" class="nav-item tab is-active " >
                <a   href="#" class="nav-link " >Just in</a>
            </li>
            <li data-tab-target="#woman" class="nav-item tab" >
                <a  href="#" class="nav-link ">Woman</a>
            </li>
            <li data-tab-target="#man" class="nav-item tab"  >
                <a  href="#" class="nav-link ">Man</a>
            </li>
            <li data-tab-target="#kids" class="nav-item tab" >
                <a  href="#" class="nav-link ">Kids</a>
            </li>
        </ul>

        <div class="content-in-hamburger-menu" id="div-content-hamburger">
            <div id="just-in" data-tab-content class=" is-active "  >
                <ul class="just-in-ul">
                    <li data-tab-target2="#new-spring-collection" class="just-in-li is-active-2 tab2 "><a href="#">New spring collection 2022</a></li>
                </ul>
            </div>

            <div  id="woman" data-tab-content >
                <ul class="woman-ul">
                    <li  data-tab-target2="#woman-jackets" class="woman-li"><a class="woman-a tab2" href="#">Jackets</a></li>
                    <li data-tab-target2="#woman-t-shirts" class="woman-li"><a class="woman-a tab2" href="#">T-shirts and tops</a></li>
                    <li data-tab-target2="#woman-shirts" class="woman-li"><a class="woman-a tab2" href="#">Shirts</a></li>
                    <hr>
                    <li data-tab-target2="#woman-trousers" class="woman-li"><a class="woman-a tab2" href="#">Trousers and jeans</a></li>
                    <li data-tab-target2="#woman-dresses-skirts" class="woman-li"><a class="woman-skirts tab2" href="#">Skirts and jumpsuits</a></li>
                    <hr>
                    <li data-tab-target2="#woman-shoes" class="woman-li"><a class="woman-a tab2" href="#">Shoes</a></li>
                    <hr>
                    <li data-tab-target2="#woman-accessories" class="woman-li"><a class="woman-a tab2" href="#">Accessories</a></li>
                </ul>
            </div>

            <div  id="man" data-tab-content >
                <ul class="man-ul">
                    <li data-tab-target2="#man-jackets" class="man-li"><a class="man-a tab2" href="#">Jackets</a></li>
                    <li data-tab-target2="#man-t-shirts" class="man-li"><a class="man-a tab2" href="#">T-shirts</a></li>
                    <li data-tab-target2="#man-shirts" class="man-li"><a class="man-a tab2" href="#">Shirts</a></li>
                    <hr>
                    <li data-tab-target2="#man-trousers" class="man-li"><a class="man-a tab2" href="#">Trousers and jeans</a></li>
                    <hr>
                    <li data-tab-target2="#man-shoes" class="man-li"><a class="man-a tab2" href="#">Shoes</a></li>
                    <hr>
                    <li data-tab-target2="#man-accessories" class="man-li"><a class=" tab2" href="#">Accessories</a></li>
                </ul>
            </div>

            <div id="kids" data-tab-content >
                <ul class="kids-ul">
                    <li data-tab-target2="#girls-6-14" class="kids-li"><a class="kids-a tab2" href="#">Girl | 6-14 years </a></li>
                    <li data-tab-target2="#boys-6-14" class="kids-li"><a class="kids-a tab2" href="#">Boy | 6-14 years</a></li>
                    <li data-tab-target2="#baby-girl" class="kids-li"><a class="kids-a tab2" href="#">Baby girl | 6 months - 5 years</a></li>
                    <li data-tab-target2="#baby-boy" class="kids-li"><a class="kids-a tab2" href="#">Baby boy | 6 months - 5 years</a></li>
                    <li data-tab-target2="#mini" class="kids-li"><a class="kids-a tab2" href="#">Mini | 0 - 12 months</a></li>

                </ul>
            </div>

        </div>

    </nav>

    <?php include_once("header.php"); ?>

    <div id="main-content"  class="main-content"> 
    </div>
    <div id="main_content" class="main-content ">

        <div w3-include-html="slider.html" id="new-spring-collection" data-tab-content2
             class="spring-collection is-active-2"></div>
        <div id="woman-jackets" data-tab-content2 >
        </div>
        <div id="woman-t-shirts" data-tab-content2>
        </div>
        <div id="woman-shirts" data-tab-content2>
        </div>
        <div id="woman-trousers" data-tab-content2>
        </div>
        <div id="woman-dresses-skirts" data-tab-content2>
        </div>
        <div id="woman-shoes" data-tab-content2>
        </div>
        <div id="woman-accessories" data-tab-content2>
        </div>
        <div id="man-jackets" data-tab-content2>
        </div>
        <div id="man-t-shirts"  data-tab-content2>
        </div>
        <div id="man-shirts" data-tab-content2>
        </div>
        <div id="man-trousers" data-tab-content2>
        </div>
        <div id="man-shoes" data-tab-content2>
        </div>
        <div id="man-accessories" data-tab-content2>
        </div>
        <div id="girls-6-14" data-tab-content2></div>
        <div id="boys-6-14" data-tab-content2></div>
        <div id="baby-girl" data-tab-content2></div>
        <div id="baby-boy" data-tab-content2></div>
        <div id="mini" data-tab-content2></div>
    </div>

</div>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/clothing.js"></script>
<script src="../js/navbar.js"></script>
</body>
</html>