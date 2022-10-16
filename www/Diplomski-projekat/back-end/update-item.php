<?php
session_start();
include('../database/functions.php');

if(isset($_POST['btnSave'])) {


    $item_name = $_POST['item-name'];
    $item_description = $_POST['item-description'];
    $item_price = $_POST['item-price'];
    $item_currency = $_POST['item-currency'];
    $table_name = $_COOKIE['table_name'];

    $table_name1="`".$_COOKIE['table_name']."`";
    $id=$_COOKIE['id_num'];
    $sql="SELECT * FROM" .$table_name1. " WHERE `id`=$id";
    $query=mysqli_query($db->con,$sql) ;
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc(($query));

    if (isset($_FILES['item-image1'])) {
        $item_image1 = "images/".$table_name."/". $_FILES['item-image1']['name'];
    }

    else{
        $item_image1=$row['item-image1'];
    }

    if (isset($_FILES['item-image2'])) {
        $item_image2 ="images/".$table_name."/".$_FILES['item-image2']['name'];

    }
    else{
        $item_image2=$row['item-image2'];
    }

    if (isset($_FILES['item-image3'])) {
        $item_image3 ="images/".$table_name."/".$_FILES['item-image3']['name'];

    }

    else{
        $item_image3=$row['item-image3'];
    }

    if (isset($_FILES['item-image4'])) {
        $item_image4 ="images/".$table_name."/".$_FILES['item-image4']['name'];

    }

    else{
        $item_image4=$row['item-image4'];
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
        $query = "UPDATE " .$table_name. "  SET `item-name`='$item_name',`item-description`='$item_description', `item-price`=$item_price, `item-currency`='$item_currency', `item-image1`='$item_image1', `item-image2`='$item_image2', `item-image3`='$item_image3', `item-image4`='$item_image4', `37-size`='$size_37', `38-size`='$size_38', `39-size`='$size_39', `40-size`='$size_40', `41-size`='$size_41' WHERE `id`=$id ";
         $query_run=mysqli_query($db->con,$query);
    }

    else if ($table_name=='woman-accessories' || $table_name=='man-accessories')
    {
        $table_name="`".$_COOKIE['table_name']."`";
        $query = "UPDATE " .$table_name. "  SET `item-name`='$item_name',`item-description`='$item_description', `item-price`=$item_price, `item-currency`='$item_currency', `item-image1`='$item_image1', `item-image2`='$item_image2', `item-image3`='$item_image3', `item-image4`='$item_image4' WHERE `id`=$id";
        $query_run=mysqli_query($db->con,$query);
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
        $query = "UPDATE " .$table_name. "  SET `item-name`='$item_name',`item-description`='$item_description', `item-price`=$item_price, `item-currency`='$item_currency', `item-image1`='$item_image1', `item-image2`='$item_image2', `item-image3`='$item_image3', `item-image4`='$item_image4', `s-size`='$size_s', `m-size`='$size_m', `l-size`='$size_l', `xl-size`='$size_xl', `xxl-size`='$size_xxl' WHERE `id`=$id ";
        $query_run=mysqli_query($db->con,$query);
    }




    header("Location: ../admin/admin.php");

}