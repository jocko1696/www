<?php
session_start();
include('../database/functions.php');

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Admin panel | Sarah</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/avaliable-items.css>
    <script src="https://kit.fontawesome.com/aa4f53fc4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<div class="full-display">
    <div class="table">
        <table class="table-with-data">
            <thead>
            <tr>
                <th colspan="16" class="header-add">
                    <div class="containerForBtn">
                        <button class="btnAdd"  onclick="insertTable();"><i class="fa-solid fa-plus"></i>Add</button>
                        <span class="addSpan">&nbsp;Add new user</span>
                    </div>
                </th>
            </tr>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>First name</th>
                <th>Last name</th>
                <th>E-mail</th>
                <th>User status</th>
                <th>User image</th>
                <th>Delete item</th>
                <th>Update item</th>

                <?php
                $table_name=$_COOKIE['table_name'];
                    ?>
            </tr>
            </thead>
            <tbody>
            <?php
            $table_name="`".$_COOKIE['table_name']."`";
            $query='SELECT * FROM'.$table_name;
            $query_run=mysqli_query($db->con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                while($row=mysqli_fetch_assoc(($query_run)))
                {

                    ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['first-name']; ?></td>
                        <td><?php echo $row['last-name']; ?></td>
                        <td><?php echo $row['e-mail']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td> <img  class="img" src="../<?php echo $row['user-image']?>"  alt=""></td>


                        <td><button type="submit" name="deleteBtn" class="button deleteBtn" onclick="deleteTable(<?php echo  $row['id'] ?>);">Delete</button></td>
                        <td><button type="submit" name="editBtn" class="button editBtn" onclick="editTable(<?php echo  $row['id'] ?>);">Edit</button></td>

                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>

        </table>
    </div>
</div>
<script src="../js/avaliable-users.js"></script>
</body>