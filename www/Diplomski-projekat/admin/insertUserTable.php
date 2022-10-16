
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Add new user | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/insertUserTable.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
</head>
<body>
<div class="background">

    <div class="logo-and-brand">
        <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
        <p class="brand-text">Sarah</p>
    </div>

    <div id="insertTable" class="insertTable">
        <form class="form" method="post" action="../back-end/insert-user.php" enctype="multipart/form-data">
            <h2>Add new user</h2>
            <div class="inputBx">
                <span>Username</span>
                <input  id="username" class="input username"  name="username"  >
            </div>
            <div class="inputBx">
                <span>Password</span>
                <input  type="password" id="password" class="input password" name="password">
            </div>
            <div class="inputBx">
                <span>First name</span>
                <input id="first-name" class="input first-name" type="text" name="first-name" >
            </div>
                <div class="inputBx">
                    <span>Last name</span>
                    <input id="last-name" class="input last-name" type="text" name="last-name" >
                </div>
                <div class="inputBx">
                    <span>E-mail</span>
                    <input id="e-mail" class="input e-mail" type="text" name="e-mail" >
                </div>

            <div class="inputBx">
                <span>User image</span>
                <input id="user-image" class="input image" type="file" name="user-image">
            </div>

                <p class="item-sub-heading">Choose user status</p>
                <div class="checkBox">

                    <input type="radio" class="check-btn " name="radio-btn" value="admin" id="admin">
                    <label for="admin">Admin</label>
                </div>
                <div class="checkBox">

                    <input type="radio" class="check-btn" name="radio-btn" value="user"  id="user">
                    <label for="user">User</label>
                </div>
                <div class="checkBox">

                    <input type="radio" class="check-btn" name="radio-btn" value="guest"   id="guest">
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