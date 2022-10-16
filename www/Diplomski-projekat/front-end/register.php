<?php
    session_start();

    include_once ("../database/functions.php");
    if(isset($_POST['buttonCreate']))
    {
        //get th data
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $first_name=$_POST['first-name'];
        $last_name=$_POST['last-name'];
        $e_mail=$_POST['e-mail'];

         $sql="INSERT IGNORE INTO `users` (`id`, `username`, `password`, `e-mail`, `first-name`, `last-name`, `is-guest`, `status`) VALUES (NULL,'$username','$password','$e_mail','$first_name','$last_name', '0', 'user')";
         $query=mysqli_query($db->con,$sql);
         $_SESSION['user']=$username;
         header("Location: ../back-end/session.php");

    }

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Register | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/register.css>

</head>
<body>
<section>
    <?php include_once("header.php"); ?>
    <div class="contentBx">

        <form class="formBx" action="" method="post">

            <h2>Sign up</h2>
            <div class="inputBx">
                <span>First name</span>
                <input id="first-name" class="input" type="text" name="first-name" value="*Name" onclick="ClearFields('first-name');">
            </div>
            <div class="inputBx">
                <span>Last name</span>
                <input  id="last-name" class="input" type="text" name="last-name" value="*Surname" onclick="ClearFields('last-name');">
            </div>
            <div class="inputBx">
                <span>E-mail</span>
                <input id="e-mail" class="input" type="text" name="e-mail" value="*user@gmail.com" onclick="ClearFields('e-mail');">
            </div>
            <div class="inputBx">
                <span>Username</span>
                <input id="username" class="input" type="text" name="username" value="*Username" onclick="ClearFields('username');">
            </div>
            <div class="inputBx">
                <span>Password</span>
                <input id="password" class="input" type="password" name="password" value="*Password" onclick="ClearFields('password');">
            </div>

            <div class="inputBx">
                <input class="input" type="submit" value="Create account" name="buttonCreate">
            </div>

        </form>
    </div>
    <div class="imageBx">
        <img src="../images/img/trinh-minh-th-MQOA0n3chA8-unsplash.jpg" alt="">
    </div>
</section>
<div class="footer-div"><?php include_once ("footer.php"); ?></div>
<script src="../js/register.js"></script>
</body>