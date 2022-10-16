<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>About us | Sarah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/about-us.css>

</head>
<body>
<?php include_once("header.php");
?>
<div class="section-about-us d-flex flex-row ">

    <div class="image-two w-50">
        <img src="../images/fabric/fabric.jpg" alt="..">
    </div>
    <div class="about-sarah w-50 d-flex justify-content-center align-items-center">

        <p>Sarah was founded in 1984 and is today one of the leading fashion groups in the world.
            Based in its city of origin, Sarajevo, the company has an extensive store network
            of 803,000 m2 in 110 countries.
            <br><br>
            Every year it designs
            more than 18,000 garments and accessories for wearing the season’s trends.
        </p>
    </div>


</div>


<div class="section-information d-flex flex-row ">

    <div class="infos w-50 d-flex flex-column align-items-center justify-content-center">
        <div>
            <img class="svg-photo" src="../images/svg/phone.svg" alt="..">
            <a href="tel:+38757281382">+38757281382</a>
        </div>
        <div>
            <img class="svg-photo" src="../images/svg/location.svg" alt="..">
            <span>Nikole Tesle 6, 71420 Pale</span>
        </div>
        <div>
            <img class="svg-photo" src="../images/svg/mail.svg" alt="..">
            <a href="mailto:sarahStore@gmail.com">sarahStore@gmail.com</a>
        </div>
    </div>

    <div class="image w-50">
        <img src="../images/fabric/industry.jpg" alt="..">
    </div>
</div>








<div class="footer-div"><?php include_once ("footer.php"); ?></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--<script src="../js/about-us.js"></script>-->
<script src="../js/navbar.js"></script>
</body>



