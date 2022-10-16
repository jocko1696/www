<?php
session_start();
include('../database/functions.php');

if(isset($_POST['btnSave'])) {
    $item_name = $_POST['item-name'];
    $item_description = $_POST['item-description'];
    $item_price = $_POST['item-price'];
    $item_currency = $_POST['item-currency'];
    $table_name = $_COOKIE['table_name'];

    if (isset($_FILES['item-image1'])) {
        $item_image1 = "images/".$table_name."/". $_FILES['item-image1']['name'];


    }

    if (isset($_FILES['item-image2'])) {
        $item_image2 ="images/".$table_name."/".$_FILES['item-image2']['name'];

    }

    if (isset($_FILES['item-image3'])) {
        $item_image3 ="images/".$table_name."/".$_FILES['item-image3']['name'];

    }

    if (isset($_FILES['item-image4'])) {
        $item_image4 ="images/".$table_name."/".$_FILES['item-image4']['name'];

    }




    if($table_name=='woman-shoes' || $table_name=='man-shoes') {

        if(empty($_POST['size-37']))
        {
            $size_37='0';
        }
        else{
            $size_37='1';
        }

        if(empty($_POST['size-38']))
        {
            $size_38='0';
        }
        else{
            $size_38='1';
        }

        if(empty($_POST['size-39']))
        {
            $size_39='0';
        }
        else{
            $size_39='1';
        }

        if(empty($_POST['size-40']))
        {
            $size_40='0';
        }
        else{
            $size_40='1';
        }

        if(empty($_POST['size-41']))
        {
            $size_41='0';
        }
        else{
            $size_41='1';
        }

        $table_name="`".$_COOKIE['table_name']."`";
        $query = "INSERT IGNORE INTO " .$table_name. " (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `37-size`, `38-size`, `39-size`, `40-size`, `41-size`) VALUES (NULL,'$item_name','$item_description',$item_price,'$item_currency','$item_image1','$item_image2','$item_image3','$item_image4','$size_37','$size_38','$size_39','$size_40','$size_41')";
        $query_run=mysqli_query($db->con,$query);
        var_dump($query_run);
}

    else if ($table_name=='woman-accessories' || $table_name=='man-accessories')
    {
        $table_name="`".$_COOKIE['table_name']."`";
        $query = "INSERT IGNORE INTO " .$table_name. " (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`) VALUES (NULL,'$item_name','$item_description',$item_price,'$item_currency','$item_image1','$item_image2','$item_image3','$item_image4')";
        $query_run=mysqli_query($db->con,$query);
        var_dump($query_run);
    }

    else{
        if(empty($_POST['size-s']))
        {
            $size_s='0';
        }
        else{
            $size_s='1';
        }

        if(empty($_POST['size-m']))
        {
            $size_m='0';
        }
        else{
            $size_m='1';
        }

        if(empty($_POST['size-l']))
        {
            $size_l='0';
        }
        else{
            $size_l='1';
        }

        if(empty($_POST['size-xl']))
        {
            $size_xl='0';
        }
        else{
            $size_xl='1';
        }

        if(empty($_POST['size-xxl']))
        {
            $size_xxl='0';
        }
        else{
            $size_xxl='1';
        }

        $table_name="`".$_COOKIE['table_name']."`";
        $query = "INSERT IGNORE INTO " .$table_name. " (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s-size`, `m-size`, `l-size`, `xl-size`, `xxl-size`) VALUES (NULL,'$item_name','$item_description',$item_price,'$item_currency','$item_image1','$item_image2','$item_image3','$item_image4','$size_s','$size_m','$size_l','$size_xl','$size_xxl')";
        var_dump($query);
        $query_run=mysqli_query($db->con,$query);
        var_dump($query_run);
    }




    header("Location: ../admin/admin.php");

}