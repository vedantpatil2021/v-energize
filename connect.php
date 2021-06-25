<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$message = $_POST['message'];
$to = "patilvedant0608@gmail.com";
$subject = "Mail From website";
$txt = "Name = " . $Name . "\r\n  Email = " . $Email .  "\r\n Phone_Number =" . $Phone_Number. "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: patilvedant6082@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
?>
