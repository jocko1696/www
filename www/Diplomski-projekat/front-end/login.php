<?php
session_start();

include_once ("../database/functions.php");

if(isset($_POST['submitBtn']))
{
    //get the data
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM `users` WHERE `username`='$username' && `password`='$password'";
    $query=mysqli_query($db->con,$sql) or die('Log in problem!');
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc(($query));
    if($count==1)
    {
        $_SESSION['user']=$username;
        $_SESSION['status']=$row['status'];
        $_SESSION['user-id']=$row['id'];

        header("Location: ../back-end/session.php");
    }

    else{
        ?>
        <script>
            window.onload=function (){
                let username=document.querySelector('.username');
                username.style.border="1px solid red";
                username.value="";

                let password=document.querySelector('.password');
                password.style.border="1px solid red";
                password.value="";

                let error_message=document.querySelector('.error-message');
                error_message.style.display="block";

            }
        </script>

<?php

    }


}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Log in | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/login.css>

</head>
<body>
<section>
    <?php include_once("header.php"); ?>
    <div class="imageBx">
        <img src="../images/img/julee-juu-l9L3pEMy5Q8-unsplash.png" alt="">
    </div>
    <div class="contentBx">

        <form class="formBx" action="login.php" method="post">

            <h2>Log in</h2>
            <div class="inputBx">
                <span>Username</span>
                <input class="input username" type="text" name="username">
            </div>
            <div class="inputBx">
                <span>Password</span>
                <input class="input password" type="password" name="password">
            </div>
            <p class="error-message">Username or password are incorrect.<br>Please enter again. </p>
            <div class="inputBx">
                <input class="input" type="submit" value="Log in" name="submitBtn">
            </div>
            <div class="inputBx">
                <p>Don't have an account?&nbsp;<a class="sign-up" href="register.php">Sign up</a></p>
            </div>
        </form>
    </div>
</section>
<div class="footer-div"><?php include_once ("footer.php"); ?></div>
</body>