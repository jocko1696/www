<?php
session_start();
include('../database/functions.php');


    $table_name="`users`";
    $id=$_COOKIE['user_id'];
    $sql="SELECT * FROM" .$table_name. " WHERE `id`=$id";
    $query=mysqli_query($db->con,$sql) ;
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc(($query));

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Edit user | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/updateUserTable.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
</head>
<body>
<div class="background">

    <div class="logo-and-brand">
        <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
        <p class="brand-text">Sarah</p>
    </div>


    <div id="updateTable" class="updateTable">
        <form class="form" method="post" action="../back-end/update-user.php" enctype="multipart/form-data">
            <h2>Edit existing user</h2>
            <div class="inputBx">
                <span>Username</span>
                <input  id="username" class="input username"  name="username" value="<?php echo $row['username']; ?>"  >
            </div>
            <div class="inputBx">
                <span>Password</span>
                <input  type="password" id="password" class="input password" name="password" value="<?php echo $row['password']; ?>">
            </div>
            <div class="inputBx">
                <span>First name</span>
                <input id="first-name" class="input first-name" type="text" name="first-name" value="<?php echo $row['first-name']; ?>" >
            </div>
            <div class="inputBx">
                <span>Last name</span>
                <input id="last-name" class="input last-name" type="text" name="last-name" value="<?php echo $row['last-name']; ?>">
            </div>
            <div class="inputBx">
                <span>E-mail</span>
                <input id="e-mail" class="input e-mail" type="text" name="e-mail" value="<?php echo $row['e-mail']; ?>">
            </div>

            <div class="inputBx">
                <span>User image</span>
                <input id="user-image" class="input image" type="file" name="user-image">
            </div>

            <p class="item-sub-heading">Choose user status</p>
            <div class="checkBox">

                <input type="radio" class="check-btn " name="radio-btn" id="admin" value="admin" <?php if($row['status']=='admin') echo 'checked'; ?>>
                <label for="admin">Admin</label>
            </div>
            <div class="checkBox">

                <input type="radio" class="check-btn" name="radio-btn" value="user"  id="user" <?php if($row['status']=='user') echo 'checked'; ?>>
                <label for="user">User</label>
            </div>
            <div class="checkBox">

                <input type="radio" class="check-btn" name="radio-btn" value="guest"   id="guest" <?php if($row['status']=='guest') echo 'checked'; ?>>
                <label for="guest">Guest</label>
            </div>

            <div class="buttonBx">
                <button type="button" class="btnClose" name="btnClose" onclick="closeForm();" >Close</button>
                <button type="submit"  class="btnSave" name="btnSave" >Save</button>
            </div>

        </form>
    </div>
</div>
<script src="../js/avaliable-users.js"></script>
</body>