
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/footer.css"
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
</head>
<body>
    <footer>
        <div class="row_">
            <div class="column">
                <div class="logo sarah-logo-and-brand">
                    <a class="href-logo" href="index.php">
                    <img src="../images/img/big-wing-butterfly.png" class="sarah-brand-logo" alt="..">
                    <p class="sarah-brand-text">Sarah</p>
                    </a>
                </div>
                <p class="about-Sarah">Express your inner star. Live life with style.Wear Sarah.</p>
            </div>

            <div class="column data">
                <h3>Store<div class="underline"><span></span></div></h3>

                        <p class="p">Nikole Tesle 6</p>
                        <p class="p">Pale, 71420</p>
                        <p class="p">Bosna i Hercegovina</p>
                        <p class="p email-id">sarahStore@gmail.com</p>
                        <h4 class="p">+38757281382</h4>

            </div>

            <div class="column">
                <h3 class="move-right "> &nbsp;&nbsp;Links<div class=" move-right underline"><span></span></div></h3>
                <ul class="footer-ul  ">
                    <li class="footer-links" ><a href="index.php">Home</a></li>
                    <?php
                        if(isset($_SESSION['status'])){
                            if($_SESSION['status']=='user'){
                    ?>
                    <li class="footer-links active-link" ><a href="clothing.php">Clothing</a></li>
                    <?php }} ?>
                    <li class="footer-links" ><a href="about-us.php">About Us</a></li>
                    <li class="footer-links" ><a href="sarah-materials.php">Sarah Materials</a></li>

                </ul>
            </div>


        <div class="column">
            <h3>Newsletter <div class="underline"><span></span></div></h3>
            <form>
                <i class="far fa-envelope"></i> <input type="email" placeholder="Enter your email here" required> <button type="submit"><i class="fas fa-arrow-right"></i></button>
            </form>
            <div class="social-icons">
                <a href="https://www.facebook.com/" ><i class="fab fa-facebook-f"></i></a>
               <a href="https://twitter.com/?lang=en"> <i  class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
              <a href="https://www.pinterest.com/"><i  class="fab fa-pinterest"></i></a>
            </div>
        </div>
           <hr class="footer-hr">
            <p class="copyright">Sarah © 2022 All rights reserved</p>

        </div>
    </footer>
<!--    <script src="../js/footer.js"></script>-->
</body>

