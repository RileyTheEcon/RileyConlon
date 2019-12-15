<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone']:
$message = $_POST['message'];

$recipient = "r.conlon9494@gmail.com";
$subject = "Contact Response from $name";
$formcontent = "Message: $message \n $name \n $email \n $phone";
$mailheader = "From: $email & $phone";

mail($recipient,$subject,$formcontent,$mailheader);
echo "Thank you!";
?>