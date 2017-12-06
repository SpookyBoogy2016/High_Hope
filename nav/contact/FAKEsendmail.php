<?php
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';


$mail = new PHPMailer();
$mail -> SMTPDebug = 2;
$mail -> isSMTP();
$mail -> Host="smtp.gmail.com";
$mail -> Port = 587;

$mail -> SetFrom("test@gmail.com", "donotreply");
$mail -> AddAddress("nrrutledge@mail.lipscomb.edu", "Noah");

$mail -> Subject = "this is a test email";
$mail -> Body = "go away";
$mail -> send();
?>
