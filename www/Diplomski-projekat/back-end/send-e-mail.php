<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once '../php-mailer/Exception.php';
include_once '../php-mailer/PHPMailer.php';
include_once '../php-mailer/SMTP.php';

include_once('../database/functions.php');

if(isset($_POST['payAndPlaceOrderBtn'])){


    $e_mail=$_POST['e-mail'];
    $first_name=$_POST['first-name'];
    $last_name=$_POST['last-name'];
    $phone=$_POST['phone'];
    $postal_code =$_POST['postal-code'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $payment_type =$_POST['card'];

    $mail =new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'joca.gluhovic@gmail.com';                     //SMTP username
    $mail->Password   = 'yzyhccjwslpkvnhb';                               //SMTP password
    $mail->SMTPSecure='tls';
    $mail->Port=587;
    $mail->SMTPDebug = 0;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->CharSet='UTF-8';
    $mail->isHTML(true);

    $mail->setFrom('joca.gluhovic@gmail.com');
    $mail->addAddress($e_mail);

    $mail->Subject ='Sarah order';
    $mail->Body='<h1>Order from Sarah Clothing Store</h1><br><br>';

    $user_id = $_SESSION['user-id'];
    $sql="SELECT * FROM `cart` WHERE `user-id`=$user_id";
    $query=mysqli_query($db->con,$sql);
    $items_in_bag=mysqli_fetch_all($query,MYSQLI_ASSOC);

    $i=0;
    foreach($items_in_bag as $item_in_bag) {


        $table_name = "`" . $item_in_bag['table-name'] . "`";
        $item_id = $item_in_bag['item-id'];

        $sql = "SELECT * FROM " . $table_name . " WHERE `id`=$item_id";
        $query = mysqli_query($db->con, $sql);
        $count = mysqli_num_rows($query);
        $item_ = mysqli_fetch_assoc(($query));

        $item_name =$item_['item-name'];
        $quantity=$item_in_bag['quantity'];
        $selected_size=$item_in_bag['selected-size'];
        $items_price=$item_in_bag['items-price'];
        $total_count = $_SESSION['total'];


        $image_path="../".$item_['item-image1'];
        $cid="image".$i;
        $mail->addEmbeddedImage($image_path,$cid);
        $i++;


        $mail->Body.='
<div style="display:flex; flex-direction:row; flex-wrap: wrap; ">
<img alt=".." style="width:250px; height:300px; margin-right: 5px;" src="cid:'.$cid.'" >

        <div style="display:flex; flex-direction:column flex-wrap: wrap;">
                <span><b>Item name:</b> '.$item_name.'</span><br>
                <span><b>Item price: </b>'.$items_price.' BAM</span><br>
                <span><b>Selected size:</b> '.$selected_size.'</span><br>
                <span><b>Quantity: </b> '.$quantity.'</span><br>
        </div>
</div> 
<br><br> ';

    }

    $mail->Body.='<hr><br><span style="display:block;"><b>Total price to pay: </b>'.$total_count.'</brspan>
                   <span style="display:block;"><b>Type of payment: '.$payment_type.'</b></span>
                   <hr><br>
                   <span style="display:block;">Sarah Store</span>
                   <span style="display:block;">Nikole Tesle 6</span>
                   <span style="display:block;">Pale, 71420</span>
                   <span style="display:block;">Bosna i Hercegovina</span>
                   <span style="display:block;">sarahStore@gmail.com</span>
                   <span style="display:block;">+38757281382</span>

';


    if($mail->send())
    {
        echo 'Message sent successfully';
        ?>
        <script>window.location.assign('../front-end/thank-you.php')</script>";
        <?php
    }

    else{
       echo 'Mail error';
        ?>
        <script>window.location.assign('../front-end/404-error.php')</script>";
        <?php
    }


}