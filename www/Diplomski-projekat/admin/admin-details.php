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
    <link rel="stylesheet" href=../css/admin-details.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<div class="background">
    <div class="detailBx">
        <div class="imageBx">
            <img class="image" alt="" src="../<?php  echo $row['user-image'];?>">
        </div>

        <div class="informationBx">
            <div class="inputBx">
                <span class="textSpan">First name: </span>
                <span class="valueSpan"><?php  echo $row['first-name'] ;?></span>
            </div>

            <div class="inputBx">
                <span class="textSpan">Last name: </span>
                <span class="valueSpan"><?php  echo $row['last-name'] ;?></span>
            </div>

            <div class="inputBx">
                <span class="textSpan">Username: </span>
                <span class="valueSpan" ><?php  echo $row['username'] ;?></span>
            </div>

            <div class="inputBx">
                <span class="textSpan">Password: </span>
                <span class="valueSpan"><?php  echo $row['password'] ;?></span>
            </div>

            <div class="inputBx">
                <span class="textSpan">E-mail: </span>
                <span class="valueSpan"><?php  echo $row['e-mail'] ;?></span>
            </div>


            <div class="inputBx">
                <span class="textSpan">Status: </span>
                <span class="valueSpan"><?php  echo $row['status'] ;?></span>
            </div>
        </div>
    </div>

</div>
</body>
