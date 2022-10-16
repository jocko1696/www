<?php
session_start();
include('../database/functions.php');

$username=$_SESSION['user'];

$table_name="`users`";

$sql="SELECT * FROM " .$table_name. " WHERE `username`='$username'";
$query=mysqli_query($db->con,$sql) ;
$row=mysqli_fetch_assoc(($query));
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Admin panel | Sarah</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/admin-home.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<div class="background">
    <p class="paragraph-left">Welcome to </p>
    <div class="logo sarah-logo-and-brand">
        <img src="../images/img/big-wing-butterfly.png" class="sarah-brand-logo">
        <p class="sarah-brand-text">Sarah</p>
    </div>
    <p class="paragraph-right">administrator page!</p>
    <p class="about-Sarah ">Express your inner star. Live life with style.Wear Sarah.</p>


</div>
</body>
