<?php
session_start();
include('../database/functions.php');

if(isset($_POST['btnSave'])) {



    $table_name="`users`";
    $id=$_COOKIE['user_id_'];
    $sql="DELETE FROM" .$table_name. " WHERE `id`=$id";
    $query=mysqli_query($db->con,$sql) ;


    header("Location: ../admin/admin.php");

}