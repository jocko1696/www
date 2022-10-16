<?php
session_start();
include('../database/functions.php');


    $table_name="`".$_COOKIE['table_name']."`";
    $id=$_COOKIE['id_num'];
    $sql="SELECT * FROM" .$table_name. " WHERE `id`=$id";
    $query=mysqli_query($db->con,$sql) ;
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc(($query));



?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Edit table | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/editTable.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
</head>
<body>
<div class="background">

    <div class="logo-and-brand">
        <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
        <p class="brand-text">Sarah</p>
    </div>


    <div id="editTable" class="editTable">
        <form class="form" method="post" action="../back-end/update-item.php">
            <h2>Edit existing clothing item</h2>
            <div class="inputBx">
                <span>Item name</span>
                <textarea id="item-name" class="input item-name"  name="item-name"  ><?php echo $row['item-name']; ?></textarea>
            </div>
            <div class="inputBx">
                <span>Item description</span>
                <textarea id="item-description" class="input item-description" name="item-description"><?php echo $row['item-description']; ?></textarea>
            </div>
            <div class="inputBx">
                <span>Item price</span>
                <input id="item-price" class="input item-price" type="text" name="item-price" value="<?php echo $row['item-price']; ?>" >
            </div>
            <div class="inputBx">
                <span>Item currency</span>
                <input id="item-currency" class="input item-currency" type="text" name="item-currency" value="<?php echo $row['item-currency']; ?>">
            </div>
            <div class="inputBx">
                <span>Item image 1</span>
                <input id="item-image1" class="input image" type="file" name="item-image1" value="<?php echo $row['item-image1']; ?>">
            </div>

            <div class="inputBx">
                <span>Item image 2</span>
                <input id="item-image2" class="input image" type="file" name="item-image2" value="<?php echo $row['item-image2']; ?>">
            </div>

            <div class="inputBx">
                <span>Item image 3</span>
                <input id="item-image3" class="input image" type="file" name="item-image3" value="<?php echo $row['item-image3']; ?>">
            </div>

            <div class="inputBx">
                <span>Item image 4</span>
                <input id="item-image4" class="input image" type="file" name="item-image4" value="<?php echo $row['item-image4']; ?>">
            </div>


            <?php $table_name=$_COOKIE['table_name'];
            if($table_name=='woman-shoes'|| $table_name=='man-shoes'){


                ?>
                <p class="item-sub-heading">Avaliable sizes</p>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn check" name="size-37" value="37" id="37-size" <?php   if($row['37-size']=='1') echo 'checked'; ?>>
                    <label for="37-size">Size 37</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-38" value="38"  id="38-size" <?php   if($row['38-size']=='1') echo 'checked'; ?>>
                    <label for="38-size">Size 38</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-39" value="39"   id="39-size" <?php   if($row['39-size']=='1') echo 'checked'; ?>>
                    <label for="39-size">Size 39</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-40" value="40"   id="40-size" <?php   if($row['40-size']=='1') echo 'checked'; ?>>
                    <label for="40-size">Size 40</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-41" value="41" id="41-size" <?php   if($row['41-size']=='1') echo 'checked'; ?>>
                    <label for="41-size">Size 41</label>
                </div>
                <?php
            }

            else if ($table_name=='woman-accessories'|| $table_name=='man-accessories')
            { ?>


                <?php
            }

            else{
                ?>
                <p class="item-sub-heading">Avaliable sizes</p>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn check" name="size-s" value="S" id="s-size" <?php   if($row['s-size']=='1') echo 'checked'; ?>>
                    <label for="s-size">Size S</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-m" value="M"  id="m-size" <?php   if($row['m-size']=='1') echo 'checked'; ?>>
                    <label for="m-size">Size M</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-l" value="L"   id="l-size" <?php   if($row['l-size']=='1') echo 'checked'; ?>>
                    <label for="l-size">Size L</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-xl" value="XL"   id="xl-size" <?php   if($row['xl-size']=='1') echo 'checked'; ?>>
                    <label for="xl-size">Size XL</label>
                </div>
                <div class="checkBox">

                    <input type="checkbox" class="check-btn" name="size-xxl" value="XXL" id="xxl-size" <?php   if($row['xxl-size']=='1') echo 'checked'; ?> >
                    <label for="xxl-size">Size XXL</label>
                </div>

                <?php
            }
            ?>

            <div class="buttonBx">
                <button type="button" class="btnClose" name="btnClose" onclick="closeForm();" >Close</button>
                <button type="submit" class="btnSave" name="btnSave" >Save</button>
            </div>

        </form>
    </div>
</div>

<script src="../js/avaliable-items.js"></script>
</body>