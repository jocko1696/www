<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Admin panel | Sarah</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/admin.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body onload="loadHomePage();">

    <div class="container">
        <div class="sidebar">


                    <div class="logo-and-brand">
                        <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
                        <p class="brand-text">Sarah</p>
                    </div>
            <div class="div-with-content">
                <div class="scroll-bar">
                    <div class="scroll-content">
                        <ul>
                        <li >
                            <a href="#">
                                <i class="fa-solid fa-house" ></i>
                                <div class="title is-active" data-tab-target="#home" id="homeTab">Home</div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-user"></i>
                                <div class="title" data-tab-target="#admin-details" id="adminTab">Admin details</div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-solid fa-users"></i>
                                <div class="title" data-tab-target="#users" id="userTab">Users</div>
                            </a>
                        </li>

                        <li>
                            <a href="#" >
                                <i class="fa-brands fa-cotton-bureau"></i>
                                <div class="title " data-tab-target="#guide" onclick="showScrollbar();" id="avaliableTab">Available items</div>
                            </a>

                                <ul class="list-of-items">
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#woman-jackets">Woman jackets</div>
                                        </a>
                                    </li>
                                    <li>
                                           <a href="#">
                                               <div  data-tab-target="#woman-t-shirts">Woman T-shirts</div>
                                           </a>
                                    </li>
                                         <li>
                                             <a href="#">
                                                 <div  data-tab-target="#woman-shirts">Woman shirts</div>
                                             </a>
                                         </li>
                                   <li>
                                       <a href="#">
                                           <div  data-tab-target="#woman-trousers">Woman trousers</div>
                                       </a>
                                   </li>
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#woman-dresses-skirts">Woman dresses and skirts</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#woman-shoes">Woman shoes</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#woman-accessories">Woman accessories</div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div data-tab-target="#man-jackets">Man jackets</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#man-t-shirts">Man T-shirts</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#man-shirts">Man shirts</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div data-tab-target="#man-trousers">Man trousers</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div data-tab-target="#man-shoes">Man shoes</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div  data-tab-target="#man-accessories">Man accessories</div>
                                        </a>
                                    </li>

                                </ul>

                        </li>

                        <li>
                            <a href="#">
                                <i class="fa-regular fa-circle-question"></i>
                                <div class="title" data-tab-target="#help" id="helpTab">Help</div>
                            </a>
                        </li>

                        <li>
                            <a href="../front-end/logout.php">
                                <i class="fa-regular fa-circle-left"></i>
                                <div class="title" >Sarah start page</div>
                            </a>
                        </li>
                        </ul>

                        </div>
                    </div>
                </div>


        </div>

        <div class="main">
            <div class="top-bar">
                <ul>
                    <li>
                        <div class="user">
                            <span><?php echo $_SESSION['user']; ?></span>
                        </div>
                    </li>
                    <li class="log-out"><a href="../front-end/logout.php">Log out</a></li>
                </ul>

            </div>
            <div class="content">

                <div id="home" class="is-active home"  data-tab-content style="display: block" ></div>
                <div id="admin-details"  data-tab-content></div>
                <div id="users"  data-tab-content ></div>
                <div id="guide"  data-tab-content></div>
                <div id="help"  data-tab-content></div>

                <div id="woman-jackets"  data-tab-content ></div>
                <div id="woman-t-shirts"  data-tab-content></div>
                <div id="woman-shirts"  data-tab-content></div>
                <div id="woman-trousers"  data-tab-content></div>
                <div id="woman-dresses-skirts"  data-tab-content></div>
                <div id="woman-shoes"  data-tab-content></div>
                <div id="woman-accessories"  data-tab-content></div>
                <div id="man-jackets"  data-tab-content></div>
                <div id="man-t-shirts"  data-tab-content></div>
                <div id="man-shirts"  data-tab-content></div>
                <div id="man-trousers"  data-tab-content></div>
                <div id="man-shoes"  data-tab-content></div>
                <div id="man-accessories"  data-tab-content></div>

            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../js/admin.js"></script>


</body>