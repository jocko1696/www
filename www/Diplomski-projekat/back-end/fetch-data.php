<?php
session_start();
include_once('../database/functions.php');
$search_string = isset($_GET["data"]) ? $_GET["data"] : '';

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=../css/fetch-data.css>
</head>
<body>
<div class="grid">
    <?php

    $table_name = "`" . $_COOKIE['cookie'] . "`";
    $item_shuffle = $item->getData($table_name, $search_string);

    $url_part1 = "../front-end/item.php?id=";
    foreach ($item_shuffle as $item_) { ?>
        <div class="item">
            <?php $url_part2 = strval($item_['id']); ?>
            <a class="path" href="<?php echo $url_part1 . $url_part2 ?> "><img alt="" class="img"
                                                                               src="../<?php echo $item_['item-image1'] ?>"></a>
            <div class="item-details">
                <span class="item-name"><?php echo $item_['item-name'] ?></span>
                <br>
                <span class="item-price-and-currency"><?php echo $item_['item-price'];
                    echo "  "; ?><?php echo $item_['item-currency'] ?></span>
            </div>
        </div>
        <?php
    }

    $item->db->con->close();
    ?>

</div>


</div>

<?php include_once("../front-end/footer.php"); ?>
</body>
</html>
