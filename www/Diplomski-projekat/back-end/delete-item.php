<?php
session_start();
include('../database/functions.php');

if(isset($_POST['btnSave'])) {



    $table_name="`".$_COOKIE['table_name']."`";
    $id=$_COOKIE['id_num_'];
    $sql="DELETE FROM" .$table_name. " WHERE `id`=$id";
    $query=mysqli_query($db->con,$sql) ;


    header("Location: ../admin/admin.php");

}