<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Sarah materials | Sarah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/sarah-materials.css>

</head>
<body>
<?php include_once("header.php");
?>

<div class="section-slider d-flex flex flex-column align-items-center justify-content-center">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../images/slides/cover3.jpg" alt=".." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../images/slides/cover2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/slides/16.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/slides/17.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="text">
        <p>AT SARA'H, WE ARE CONSTANTLY WORKING TO MAKE OUR ACTIVITIES AS SUSTAINABLE
            AS POSSIBLE. SINCE WE FIRST SIGNED THE UNITED NATIONS (UN) WORLD AGREEMENT
            AND IMPLEMENTED OUR FIRST CODE OF CONDUCT IN 2001, OUR SOCIAL AND ENVIRONMENTAL
            GOALS HAVE BECOME MORE DEMANDING.<br><br>
            WE HAVE DEVELOPED A PLAN OF ACTION WITH A HOLISTIC
            VISION THAT EMBRACES CHALLENGES FOCUSED ON PEOPLE AND CHALLENGES FOCUSED ON THE PLANET.</p>
    </div>
</div>

<div class="section-image-text d-flex flex-row ">
    <div class="image w-50">
        <img src="../images/slides/18.jpg" alt="..">
    </div>
    <div class="text-paragraphs w-50">
        <p>
            WE WORK TO REDUCE OUR IMPACT AND INCLUDE SUSTAINABILITY IN EVERYDAY DECISION MAKING.
            THIS INCLUDES OUR ENTIRE VALUE CHAIN: PRODUCT DEVELOPMENT, SELECTION OF MATERIALS,
            PRODUCTION PROCEDURES, LOGISTICS AND DESIGN AND MANAGEMENT OF OUR WAREHOUSES AND STORES.
            AND THEN WHEN THE CUSTOMER NO LONGER NEEDS THE CLOTHES, WE DEVELOP REUSE AND RECYCLING PROGRAMS
            WITH THE OBJECTIVE OF ENCOURAGING THE CIRCULAR ECONOMY, WHICH REDUCES WASTE AND CONSUMPTION OF RAW
            MATERIALS.
            <br><br>
            FULFILLING OUR SUSTAINABILITY OBLIGATIONS IS A GREAT CHALLENGE THAT WE CANNOT ACHIEVE ALONE.
            THAT'S WHY WE WORK WITH SUPPLIERS, INTERNATIONAL ORGANIZATIONS, GOVERNMENTS AND OTHER COMPANIES
            FROM THE SECTOR TO TOGETHER TO ENCOURAGE REAL CHANGE IN THE INDUSTRY.



        </p>
    </div>
</div>

<div class="paragraphs d-flex flex-row flex-wrap">
    <div class="w-50 par-one">
        <h3>2022</h3>
        <span class="strong"><strong> 50% JOIN LIFE COLLECTION</strong></span>
        <p>
            <br>
            Our goal is that at least 50% of our items marketed in 2022 be
            manufactured according to the Join Life standards.
        </p>
    </div>
    <div class="w-50 par-two">
        <span class="strong"><strong>  100% RENEWABLE ELECTRIC ENERGY IN PROPRIETARY OPERATIONS</strong></span>
        <p>
            <br>
            We are working to ensure that the energy we use at all our facilities
            (central offices, logistics centers, and stores) comes from renewable sources.
        </p>
    </div>

    <div class="w-50 par-three">
        <h3>2023</h3>
        <span class="strong"><strong> 100% MORE SUSTAINABLE CELLULOSE FIBERS</strong></span>
        <p>
            <br>
        The fibers sourced from the pulp of certain trees are produced following stringent environmental standards and support
        the Changing Markets Foundation initiative to promote the responsible production of viscose and
        </p>
    </div>

    <div class="w-50 par-four">
        <span class="strong"><strong> 100% MORE SUSTAINABLE COTTON</strong></span>
        <p>
            <br>
            All our cotton will be more sustainably sourced: ecologically grown cotton -included in the Organic
            Cotton Accelerator (OCA)-, Better Cotton (BCI), or recycled cotton.
        </p>
    </div>
    <div class="w-50 par-five">
        <span class="strong"><strong>  100% GREEN TO PACK</strong></span>
        <p>
            <br>
        We are working with the Green to Pack project, a global program who purports to redesign all our
        packaging to make it more sustainable by reducing the amount of raw materials used and standardizing
        materials to facilitate their reuse and recycling.
        </p>
    </div>
    <div class="w-50 par-six">
        <span class="strong"><strong> 100% FREE FROM SINGLE USE CUSTOMER PLASTICS</strong></span>
        <p>
            <br>
        As part of the Green to Pack Program, we are redesigning all our garment packaging
        and our labeling and protection systems to ensure that,
        by 2023, no single-use plastic products fall into our customers' hands.
        </p>
    </div>
    <div class="w-50 par-7">
        <span class="strong"><strong> 100% ZERO WASTE</strong></span>
        <p>
            <br>
        We are working to ensure that, by 2023, all the waste produced in our central offices,
        logistics centers, and stores will be reused or recycled.
        </p>
    </div>
</div>



<div class="footer-div"><?php include_once ("footer.php"); ?></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--<script src="../js/sarah-materials.js"></script>-->
<script src="../js/navbar.js"></script>
</body>


