<?php
session_start();
include('../database/functions.php');

if(isset($_POST['btnSave'])) {

    $table_name="`users`";
    $username = $_POST['username'];
    $password =md5($_POST['password']) ;
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email=$_POST['e-mail'];
    $status = $_POST['radio-btn'];

    $id=$_COOKIE['user_id'];
    $sql="SELECT * FROM ".$table_name. "WHERE `id`=$id";
    $query=mysqli_query($db->con,$sql) ;
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc(($query));

    if($status=='admin' || $status=='user')
    {
        $is_guest='0';
    }

    else{
        $is_guest='1';
    }

    if (isset($_FILES['user-image'])) {
        $table_name='users';
        $user_image ="images/".$table_name."/".$_FILES['user-image']['name'];

    }
    else{
        $user_image=$row['user_image'];
    }

    $table_name="`users`";
    $query = "UPDATE " .$table_name. "  SET `username`='$username',`password`='$password', `e-mail`='$email', `first-name`='$first_name', `last-name`='$last_name',`is-guest`='$is_guest',`status`='$status',`user-image`='$user_image'   WHERE `id`=$id";
    $query_run=mysqli_query($db->con,$query);


    header("Location: ../admin/admin.php");

}