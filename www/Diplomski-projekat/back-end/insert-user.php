<?php
session_start();
include('../database/functions.php');

if(isset($_POST['btnSave'])) {

    $table_name="users";
    $username = $_POST['username'];
    $password =md5($_POST['password']) ;
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email=$_POST['e-mail'];
    $status = $_POST['radio-btn'];

    if($status=='admin' || $status=='user')
    {
        $is_guest='0';
    }

    else{
        $is_guest='1';
    }

    if (isset($_FILES['user-image'])) {
        $user_image ="images/".$table_name."/".$_FILES['user-image']['name'];

    }

        $table_name="`users`";
        $query = "INSERT IGNORE INTO " .$table_name. " (`id`, `username`, `password`, `e-mail`, `first-name`, `last-name`, `is-guest`, `status`, `user-image`) VALUES (NULL,'$username','$password','$email','$first_name','$last_name','$is_guest','$status','$user_image')";
        $query_run=mysqli_query($db->con,$query);


    header("Location: ../admin/admin.php");

}