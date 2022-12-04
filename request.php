<?php
$to = "vic111@ua.fm";
$subject = htmlspecialchars($_POST["name"]);
$message = htmlspecialchars($_POST["email"]) . ' пишет:' . "<br/><br/>" . htmlspecialchars($_POST["message"]);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . htmlspecialchars($_POST["email"]) . "\r\n";

mail($to,$subject,$message,$headers);
echo "Ваше запрос отправлен!";
?>