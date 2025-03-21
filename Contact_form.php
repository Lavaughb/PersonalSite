<?php
/*
$Fname = $_POST["First name"];
$Lname = $_POST["Last name"];
$Email = $_POST["Email"];
$PhoneNumber = $_POST["Phone Number"];
$Message = $_POST["Message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "you@example.com";
$mail->Password = "password";

$mail->setFrom($Email, $Fname, $Lname, $PhoneNumber);
$mail->addAddress("dave@example.com", "Dave");

$mail->Body = $Message;

$mail->send();

header("Location: sent.html");*/