<?php

include('connection.php');
session_start();
date_default_timezone_set("Asia/Calcutta");


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// function sendMail($productemail)
// {
// 	require("PHPMailer/PHPMailer.php");
// 	require("PHPMailer/SMTP.php");
// 	require("PHPMailer/Exception.php");

// 	$mail = new PHPMailer(true);

// 	try {
// 		//Server settings
// 		$mail->isSMTP();                                            //Send using SMTP
// 		$mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
// 		$mail->SMTPAuth = true;                                   //Enable SMTP authentication
// 		$mail->Username = 'watchers.park@gmail.com';                     //SMTP username
// 		$mail->Password = 'ysphdxoerydeuahj';                               //SMTP password
// 		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
// 		$mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

// 		//Recipients
// 		$mail->setFrom('watchers.park@gmail.com', 'PU Watchers Park');
// 		$mail->addAddress($productemail);     //Add a recipient

// 		//Attachments
// 		$mail->addAttachment('images/logo.png');    //Optional name

// 		//Content
// 		$mail->isHTML(true);                                  //Set email format to HTML
// 		$mail->Subject = $productuser . ' Your Booking Is Confirmed!';
// 		$mail->Body = "<b>Thanks for booking tickets from watchers park! </b><br>
//         <em>Enjoy your movie " . $productmovie . " at watchers park on " . $productdate . " with your friends and colleagues</em><br>
// 		Payment Id : " . $paymentid . "<br>
// 		Total tickets booked : " . $producttickets . "<br>
// 		Total amount paid : " . $productpayment . "<br>";

// 		$mail->send();
// 		return true;
// 	} catch (Exception $e) {
// 		return false;
// 	}
// }


$paymentid = $_POST['payment_id'];
$productname = $_POST['p_name'];
$productrate = $_POST['p_rating'];
$producttime = $_POST['p_time'];
$productdate = $_POST['p_date'];
$productuser = $_POST['p_username'];
$productemail = $_POST['p_email'];
$producttickets = $_POST['p_tickets'];
$productpayment = $_POST['p_payment'];

// $sql="insert into booked (product_id,payment_id,added_date) values ('".$productid."','".$paymentid."','".$dt."')";
$sql = "insert into booked (name,rating,time,date,username,email,tickets,payment) VALUES ('" . $productname . "','" . $productrate . "','" . $producttime . "','" . $productdate . "','" . $productuser . "','" . $productemail . "','" . $producttickets . "','" . $productpayment . "')";

$result = mysqli_query($con, $sql);

if ($result) {
	echo 'done';
	$_SESSION['paymentid'] = $paymentid;

} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>