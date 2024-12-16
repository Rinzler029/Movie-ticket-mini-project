<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require("PHPMailer/PHPMailer.php");
require("PHPMailer/SMTP.php");
require("PHPMailer/Exception.php");

if (isset($_GET['p_em'])) {
    $pem = $_GET['p_em'];
    $pnm = $_GET['p_nm'];
    $pdt = $_GET['p_dt'];
    $ptc = $_GET['p_tc'];
    $prs = $_GET['p_rs'];
}


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'watchers.park@gmail.com'; //SMTP username
        $mail->Password = 'ysphdxoerydeuahj'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('watchers.park@gmail.com', 'PU Watchers Park');
        $mail->addAddress($pem); //Add a recipient

        //Attachments
        $mail->addAttachment('images/logo.png'); //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Your Booking Is Confirmed!';
        $mail->Body = "<b>Thanks for booking tickets from watchers park! </b><br>
<em>Enjoy your movie " . $pnm . " at watchers park on " . $pdt . " with your friends and colleagues</em><br>
Total tickets booked : " . $ptc . "<br>
Total amount paid : " . $prs . "<br>";

        $mail->send();

        // echo "<script> document.location.href = 'index.php'; </script>";
        echo "<script> document.location.href = 'success.php'; </script>";
        return true;
    } catch (Exception $e) {
        return false;
    }

?>