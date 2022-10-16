<?php
session_start();
include('../database/functions.php');

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Admin panel | Sarah</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/avaliable-items.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body onload="returnToNormal();">

<div class="full-display">
    <div id="table" class="table">

        <table  class="table-with-data">
            <thead>
            <tr>
                 <th colspan="16" class="header-add">
                     <div class="containerForBtn">
                         <button class="btnAdd"  onclick="insertTable();"><i class="fa-solid fa-plus"></i>Add</button>
                         <span class="addSpan">&nbsp;Add new item</span>
                     </div>
                </th>
            </tr>
            <tr>
                <th>Item name</th>
                <th>Item description</th>
                <th>Item price</th>
                <th>Item currency</th>
                <th>Item image 1</th>
                <th>Item image 2</th>
                <th>Item image 3</th>
                <th>Item image 4</th>


                <?php
                $table_name=$_COOKIE['table_name'];
                if($table_name=='woman-shoes'|| $table_name=='man-shoes')
                {
                    ?>
                <th>Size 37</th>
                <th>Size 38</th>
                <th>Size 39</th>
                <th>Size 40</th>
                <th>Size 41</th>

                <?php
                }

                else if ($table_name=='woman-accessories'|| $table_name=='man-accessories')
                { ?>


                <?php
                }

                else{
                    ?>
                    <th>Size S</th>
                    <th>Size M</th>
                    <th>Size L</th>
                    <th>Size XL</th>
                    <th>Size XXL</th>
                <?php
                }
                ?>

                <th>Delete item</th>
                <th>Update item</th>

            </tr>
            </thead>

            <tbody>
            <?php
                $table_name="`".$_COOKIE['table_name']."`";
                $query='SELECT * FROM'.$table_name;
                $query_run=mysqli_query($db->con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    while($row=mysqli_fetch_assoc(($query_run)))
                    {


            ?>
            <tr>
                <td><?php echo $row['item-name']; ?></td>
                <td><?php echo $row['item-description']; ?></td>
                <td><?php echo $row['item-price']; ?></td>
                <td><?php echo $row['item-currency']; ?></td>
                <td> <img  class="img" src="../<?php echo $row['item-image1']?>"  alt=""></td>
                 <td> <img class="img" src="../<?php echo $row['item-image2']?>"  alt=""></td>
                 <td> <img class="img" src="../<?php echo $row['item-image3']?>"  alt=""></td>
                 <td> <img class="img" src="../<?php echo $row['item-image4']?>"  alt=""></td>

            <?php $table_name=$_COOKIE['table_name'];
             if($table_name=='woman-shoes'|| $table_name=='man-shoes')
                {
                    ?>
                    <td>
                        <?php if($row['37-size']=='1'){ echo 'YES';}
                        else echo'NO';
                        ?>
                    </td>

                    <td>
                        <?php if($row['38-size']=='1'){ echo 'YES';}
                        else echo'NO';
                        ?>
                    </td>

                    <td>
                        <?php if($row['39-size']=='1'){ echo 'YES';}
                        else echo'NO';
                        ?>
                    </td>

                    <td>
                        <?php if($row['40-size']=='1'){ echo 'YES';}
                        else echo'NO';
                        ?>
                    </td>

                    <td>
                        <?php if($row['41-size']=='1'){ echo 'YES';}
                        else echo'NO';
                        ?>
                    </td>

                <?php
                }

            else if ($table_name=='woman-accessories'|| $table_name=='man-accessories')
                { ?>


                <?php
                }

            else{
            ?>
            <td>
                <?php if($row['s-size']=='1'){ echo 'YES';}
                else echo'NO';
                ?>
            </td>

            <td>
                <?php if($row['m-size']=='1'){ echo 'YES';}
                else echo'NO';
                ?>
            </td>

            <td>
                <?php if($row['l-size']=='1'){ echo 'YES';}
                else echo'NO';
                ?>
            </td>

            <td>
                <?php if($row['xl-size']=='1'){ echo 'YES';}
                else echo'NO';
                ?>
            </td>

            <td>
                <?php if($row['xxl-size']=='1'){ echo 'YES';}
                else echo'NO';
                ?>
            </td>
            <?php
            }
            ?>

            <td><button type="submit" name="deleteBtn" class="button deleteBtn" onclick="deleteTable(<?php echo  $row['id'] ?>);">Delete</button></td>
            <td><button type="submit" name="editBtn" class="button editBtn" onclick="editTable(<?php echo  $row['id'] ?>);">Edit</button></td>
            </tr>
            <?php
            }
                }
            ?>
            </tbody>

        </table>

    </div>


</div>

<script src="../js/avaliable-items.js"></script>
</body>