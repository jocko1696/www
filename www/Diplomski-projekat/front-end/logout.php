<?php
session_start();

include_once ("../database/functions.php");
$sql="TRUNCATE TABLE `cart`";
$query=mysqli_query($db->con,$sql);


session_unset();
session_destroy();

header("Location: ../front-end/index.php");




