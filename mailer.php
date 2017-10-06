<?php


    //Email information
    $admin_email = "saf@advina.ru";
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $from = "info@avardasmartshop.ru";

    $comment = $name . " просит перезвонить по номеру " . $phone . " " . $email;


    //send email
    mail($admin_email, "Заявка с сайта Avarda smart.shop", $comment, "From:" . $from);
    header('Location: index.html');


?>