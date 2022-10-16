<?php

session_start();
include('../database/functions.php');

    if(!isset($_SESSION['itemsInBag']))
    {
        $_SESSION['itemsInBag']=0;
    }

    if(isset($_POST['btnAddToBag']))
    {

        $_SESSION['add-to-bag-active']='yes';

        $item_price=$_SESSION['item-price'];
        $item_id=$_SESSION['item-id'];
        $selected_size=$_POST['checked-radio'];
        $_SESSION['selected-size']=$selected_size;
        $table=$_POST['table-name'];
        $table="`".$table."`";
        $sql="SELECT * FROM ".$table." WHERE `id`=$item_id";
        $query=mysqli_query($db->con,$sql);
        $row_from_table=mysqli_fetch_assoc(($query));

        $table=$_POST['table-name'];
        if($table=='woman-shoes' || $table=="man-shoes")
        {
            $table="`".$table."`";
            if($selected_size=="37")
            {
                $available_item=$row_from_table['available-37']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-37']==0)
                {
                    $value_37="0";
                }

                else{
                    $value_37="1";
                }

                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-37`=$available_item, `37-size`='$value_37' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="38")
            {
                $available_item=$row_from_table['available-38']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-38']==0)
                {
                    $value_38="0";
                }

                else{
                    $value_38="1";
                }
                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-38`=$available_item, `38-size`='$value_38' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="39")
            {
                $available_item=$row_from_table['available-39']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-39']==0)
                {
                    $value_39="0";
                }

                else{
                    $value_39="1";
                }
                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-39`=$available_item, `39-size`='$value_39' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="40")
            {
                $available_item=$row_from_table['available-40']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-40']==0)
                {
                    $value_40="0";
                }

                else{
                    $value_40="1";
                }

                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-40`=$available_item, `40-size`='$value_40' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="41")
            {
                $available_item=$row_from_table['available-41']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-41']==0)
                {
                    $value_41="0";
                }

                else{
                    $value_41="1";
                }
                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-41`=$available_item, `41-size`='$value_41' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

        }

        else if($table=='woman-accessories' || $table=='man-accessories')
        {
            $table="`".$table."`";
            $available_items =$row_from_table['available-items']-1;

            $query = "UPDATE " .$table. "  SET `available-items`=$available_items WHERE `id`=$item_id";
            $query_run=mysqli_query($db->con,$query);
        }

        else {
            $table="`".$table."`";
            if($selected_size=="s")
            {
                $available_item=$row_from_table['available-s']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-s']==0)
                {
                    $value_s="0";
                }

                else{
                    $value_s="1";
                }

                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-s`=$available_item, `s-size`='$value_s' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="m")
            {
                $available_item=$row_from_table['available-m']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-m']==0)
                {
                    $value_m="0";
                }

                else{
                    $value_m="1";
                }
                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-m`=$available_item, `m-size`='$value_m' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="l")
            {
                $available_item=$row_from_table['available-l']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-l']==0)
                {
                    $value_l="0";
                }

                else{
                    $value_l="1";
                }
                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-l`=$available_item, `l-size`='$value_l' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="xl")
            {
                $available_item=$row_from_table['available-xl']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-xl']==0)
                {
                    $value_xl="0";
                }

                else{
                    $value_xl="1";
                }

                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-xl`=$available_item, `xl-size`='$value_xl' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }

            else  if($selected_size=="xxl")
            {
                $available_item=$row_from_table['available-xxl']-1;
                $available_items =$row_from_table['available-items']-1;
                if($row_from_table['available-xxl']==0)
                {
                    $value_xxl="0";
                }

                else{
                    $value_xxl="1";
                }
                $query = "UPDATE " .$table. "  SET `available-items`=$available_items,`available-xxl`=$available_item, `xxl-size`='$value_xxl' WHERE `id`=$item_id";
                $query_run=mysqli_query($db->con,$query);
            }
        }


        if(isset($_SESSION['itemsInBag']))
        {
            $items_in_bag = $_SESSION['itemsInBag'];
            $items_in_bag++;
            $_SESSION['itemsInBag']=$items_in_bag;
        }

        $user_id=$_POST['user-id'];
        $table_name=$_POST['table-name'];


        $sql="SELECT * FROM `cart` WHERE `item-id`=$item_id AND `user-id`=$user_id AND `selected-size`='$selected_size'";
        var_dump($sql);
        $query=mysqli_query($db->con,$sql);
        $rows=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $detect=0;
        $quantity=1;

        foreach($rows as $row) {

            if ($row['item-id'] == $item_id && $row['user-id'] == $user_id && $row['selected-size'] == $selected_size) {

                $quantity = $row['quantity'] + 1;
                $items_price=$row['items-price']+$item_price;
                $table=$_POST['table-name'];
                $query = "UPDATE `cart`  SET `quantity`=$quantity,`items-price`=$items_price WHERE `user-id`=$user_id AND `item-id` =$item_id AND `selected-size`='$selected_size' AND `table-name`='$table'";

                $query_run = mysqli_query($db->con, $query);

            }
        }

        if($detect==0){
            $sql = "INSERT IGNORE INTO `cart` (`id`, `user-id`, `item-id`,`table-name`,`selected-size`,`quantity`,`items-price`) VALUES (NULL,$user_id,$item_id,'$table_name','$selected_size',$quantity,$item_price)";
            $query = mysqli_query($db->con, $sql);

        }

    }



header("Location: ../front-end/item.php");


