<?php
session_start();
include('../database/functions.php');

if(isset($_SESSION['add-to-bag-active']))
{
    ?>
    <script>
        window.onload=function () {
            document.getElementById('add-to-bag-div').classList.add('active');
        }
    </script>

    <?php
    unset($_SESSION['add-to-bag-active']);
    ?>
<?php
}
        ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Item specification | Sarah</title>
        <meta name ="viewport"  content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/item.css">
        <link rel="stylesheet" href="../css/lightslider.css">
        <script type="text/javascript" src="../js/Jquery.js"></script>
 <script type="text/javascript" src="../js/lightslider.js"></script>
    </head>

<body>
        <?php

        include_once("header.php");

        if(isset($_GET['id']))
        {
            $item_id=$_GET['id'];
            $_SESSION['item-id']=$_GET['id'];
        }



        $table_name="`".$_COOKIE['cookie']."`";
        $_SESSION['table_name']=$_COOKIE['cookie'];
        $item_shuffle=$item->getData($table_name);

        foreach ($item_shuffle as $item_){
            if($item_['id']==$_SESSION['item-id']){
                $img_url="../".$item_['item-image1'];
                $_SESSION['item-price']=$item_['item-price'];

                ?>

<div class="full-display">
    <form class="item-form" action="../back-end/add-to-cart.php" method="post">
                <div class="item">
                   <div class="small-img">
                       <img src="../<?php echo $item_['item-image2']?>" onclick="changeImage(this)" alt="">
                       <img src="../<?php echo $item_['item-image3']?>" onclick="changeImage(this)" alt="">
                       <img src="../<?php echo $item_['item-image4']?>" onclick="changeImage(this)" alt="">
                   </div>

                    <div class="big-img">
                        <img src="../<?php echo $item_['item-image1']?>" id="image-box" alt="">
                    </div>

                </div>

                <div class="item-details">
                    <h2 class="item-name"><?php echo $item_['item-name']?></h2>
                    <p class="item-description"><?php echo $item_['item-description']?></p>
                    <span class="item-price-and-currency">
                        <span class="item-price"><?php echo $item_['item-price']?></span>
                         <span class="item-currency"><?php echo $item_['item-currency']?></span>
                    </span>



                    <hr>

                    <?php
                        if($_COOKIE['cookie']=='man-shoes' || $_COOKIE['cookie']=='woman-shoes')
                        {
                            $disabled="disabled='disabled'"  ;
                            ?>
                            <section class="invisible">
                            <p class="item-sub-heading">Select size</p>
                                <input hidden id="checked-radio" name="checked-radio" value="37">
                            <input class="radio size-radio-btn check" name="size" value="37"<?php if($item_['37-size']==0) echo "disabled='disabled'";?> id="37-size"  onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="38"  hidden <?php if($item_['38-size']==0) echo "disabled='disabled'";?>  id="38-size"  onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="39"  hidden <?php if($item_['39-size']==0) echo "disabled='disabled'";?>  id="39-size"  onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="40"  hidden <?php if($item_['40-size']==0) echo "disabled='disabled'";?>  id="40-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="41"  hidden  <?php if($item_['41-size']==0) echo "disabled='disabled'";?> id="41-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <hr>
                            </section>

                        <?php   }


                        else if( $_COOKIE['cookie']=='man-accessories' || $_COOKIE['cookie']=='woman-accessories' ){


                             }  else { ?>
                        <section class="invisible">
                            <p class="item-sub-heading">Select size</p>
                            <input hidden id="checked-radio" name="checked-radio" value="s">
                            <input class="radio size-radio-btn check" name="size" value="s"  checked hidden <?php  if($item_['s-size']==0) echo "disabled='disabled'"; ?> id="s-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="m"  hidden <?php  if($item_['m-size']==0) echo 'disabled="disabled"';?>   id="m-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="l"  hidden  <?php if($item_['l-size']==0) echo "disabled='disabled'";?>  id="l-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="xl"  hidden <?php if($item_['xl-size']==0) echo "disabled='disabled'";?>   id="xl-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <input class="radio size-radio-btn" name="size" value="xxl"  hidden <?php if($item_['xxl-size']==0) echo "disabled='disabled'";?>   id="xxl-size" onclick="document.getElementById('checked-radio').value=this.value;">
                            <hr>
                        </section>

                <?php

                        } ?>


                <section class="invisible">

                    <button type="submit" class="btn" name="btnAddToBag" id="addToBag">Add to bag</button>
<!--                    <button type="button" class="btn-wishlist"><i class="fa-solid fa-heart"></i></button>-->
                    <input hidden name="table-name" value="<?php echo $_SESSION['table_name']; ?>"
                    <input hidden name="item-id" value="<?php  echo $_SESSION['item-id']; ?>">
                    <input hidden name="user-id" value="<?php  echo $_SESSION['user-id']; ?>"
                    <input hidden name="price" value="<?php  echo $_SESSION['item-price']; ?>"

                </section>



                 </div>

        <div class="add-to-bag-div" id="add-to-bag-div">
            <div class="x-button-wrapper">
                <button type="button" id="x-mark"><img class="x-button" src="../images/svg/x-mark.svg" alt=".."></button>
            </div>
            <div class="top-container">
                <div class="left-container">
                    <img src="../<?php echo $item_['item-image1']?>"  alt="">
                </div>
                <div class="right-container">
                    <div class="item-details add-to-bas-sec">
                        <h2 class="item-name add-to-bas-sec"><?php echo $item_['item-name']?></h2>
                        <span class="selected-size add-to-bas-sec ">Selected size:</span>
                        <span class="selected-size add-to-bas-sec size-select"><?php
                            if(!isset($_SESSION['selected-size']))
                                echo 'S';
                            else
                                echo $_SESSION['selected-size'];
                            ?></span>

                        <span class="item-price-and-currency add-to-bas-sec">
                        <span class="item-price add-to-bas-sec"><?php echo $item_['item-price']?></span>
                         <span class="item-currency add-to-bas-sec"><?php echo $item_['item-currency']?></span>
                    </span>
                    </div>
                </div>
            </div>

            <div class="bottom-container-wrapper">
                <div class="bottom-container btn">
                    <a class=" go-to-bag" href="cart.php" role="button" id="goToBag">Go To Bag</a>
                </div>
            </div>

            <div class="information-box-wrapper">
                <p class="info-section">For order over 100 BAM, delivery is free.</p>
            </div>
        </div>



            </form>



    <div class="div-with-scroll">
        <div class="scroll-bar">
            <div class="scroll-content">
              <p>  <h3>MATERIALS, CARE AND ORIGIN JOIN LIFE</h3>
                <br><br>
                <p class="inner-text">Care for water: produced using less water.
                    <br><br>
                We use the Join Life label on clothing that is produced using technology and raw materials that help us to reduce the environmental impact of our products.

                </p>
                <br><br>
                <h3>MATERIALS</h3>
                <br><br>
                <p class="inner-text">
                We work with monitoring programmes to ensure compliance with safety, health and quality standards for our products.
                    <br><br>
                The Green to Wear 2.0 standard aims to minimise the environmental impact of textile manufacturing. To that end, we have developed Inditex’s The List programme, which helps guarantee both that production processes are clean and that our garments are safe and healthy.
                OUTER SHELL
                100% cotton
                </p>
                <br><br>
               <h3> CARE FOR WATER</h3>
                <br><br>
                <p class="inner-text">
                These garments are produced with technologies that reduce water consumption in their production processes.
                    <br><br>
                The garment dyeing and washing processes consume the largest amount of water. Using closed circuits that allow us to reuse water or employing technologies such as low bath ratio machines or mass dyeing, which reduce water consumption, help us to preserve freshwater resources.
                CERTIFICATIONS
                This product has been manufactured in accordance with the Join Life standard developed by the Inditex Group and based on Life-Cycle Assessment, an internationally standardised methodology used to evaluate the impact of a product in the different stages of its production, use and end of life.
                    <br><br>
                In order to evaluate compliance with the standard, an auditing programme has been put in place to be carried out by specialised external companies.
                </p>
                <br><br>
                  <h3>   CARE </h3>
                <br><br>
                <p class="inner-text">

                Caring for your clothes is caring for the environment.<br>
                Lower temperature washes and delicate spin cycles are gentler on garments and help to protect the colour, shape and structure of the fabric. Furthermore, they reduce the amount of energy used in care processes.
                </p>


                <br><br>
            </div>
        </div>
    </div>



    </div>


            <?php }
        }

        ?>



        <div class="match-with">
            <p class="item-sub-heading heading-in-slider">You may olso like</p>

            <ul id="autoWidth" class="cs-hidden">

                <?php
                $i=0;
                $url_part1="../front-end/item.php?id=";
                foreach ($item_shuffle as $item_){
                    $i++;
                    ?>
                    <li class="item-<?php echo strval($i); ?>">
                        <div class="box-for-slider">
                            <div class="item-in-slide">
                                <?php
                                $url_part2=strval($item_['id']);
                                ?>
                                <a href="<?php echo $url_part1.$url_part2  ?> "><img class="img" src="../<?php echo $item_['item-image1']?>" alt=""></a>
                                <div class="item-details-in-slide">
                                    <span class="item-name-in-slide"><?php echo $item_['item-name'] ?></span>
                                    <br>
                                    <span class="item-price-and-currency-in-slide"><?php echo $item_['item-price']; echo"  ";?><?php echo $item_['item-currency'] ?></span>
                                </div>
                            </div>
                        </div>

                    </li>
                <?php } ?>

            </ul>
        </div>

     <div class="footer-div"><?php include_once ("footer.php"); ?></div>


        <script src="../js/item.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
        <?php
        if(isset($_SESSION['user'])) {
        if ($_SESSION['user'] == 'guest') {
        ?>

        <script>
            $(document).ready(function(){
                $('.invisible').addClass("hidden");
            })


        </script>

        <?php
            }} ?>

</body>
