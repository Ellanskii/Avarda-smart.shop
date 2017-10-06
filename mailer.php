<?php


    //Email information
    $admin_email = "saf@advina.ru";
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];

    $comment = $name . " просит перезвонить по номеру " . $phone;


    //send email
    mail($admin_email, "Заявка с сайта Avarda smart.shop", $comment, "From:" . $email);
    header('Location: index.html');


?>