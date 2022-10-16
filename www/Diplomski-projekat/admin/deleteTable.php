
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Delete clothing item | Sarah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/deleteTable.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
</head>
<body>
<div class="background">

    <div class="logo-and-brand">
        <img src="../images/img/big-wing-butterfly.png" class="brand-logo" alt="">
        <p class="brand-text">Sarah</p>
    </div>


    <div id="deleteTable" class="deleteTable">
        <form class="form" method="post" action="../back-end/delete-item.php" >
            <h2>Delete existing clothing item</h2>
            <p>Do you want to delete existing piece of clothes from Sarah's closet ?</p>

            <div class="buttonBx">
                <button type="button" class="btnClose" name="btnClose" onclick="closeForm();" >NO</button>
                <button type="submit"  class="btnSave" name="btnSave" >YES</button>
            </div>

        </form>
    </div>
</div>

<script src="../js/avaliable-items.js"></script>
</body>
