<?php

// session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// if (isset($_POST["submit"])) {
    // function sendMail($pem)
    // {
    //     require("PHPMailer/PHPMailer.php");
    //     require("PHPMailer/SMTP.php");
    //     require("PHPMailer/Exception.php");

    //     $mail = new PHPMailer(true);

    //     try {
    //         //Server settings
    //         $mail->isSMTP();                                            //Send using SMTP
    //         $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //         $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    //         $mail->Username = 'watchers.park@gmail.com';                     //SMTP username
    //         $mail->Password = 'ysphdxoerydeuahj';                               //SMTP password
    //         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //         $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //         //Recipients
    //         $mail->setFrom('watchers.park@gmail.com', 'PU Watchers Park');
    //         $mail->addAddress($pem);     //Add a recipient

    //         //Attachments
    //         $mail->addAttachment('images/logo.png');    //Optional name

    //         //Content
    //         $mail->isHTML(true);                                  //Set email format to HTML
    //         $mail->Subject = 'Your Booking Is Confirmed!';
    //         $mail->Body = "<b>Thanks for booking tickets from watchers park! </b><br>
    //     <em>Enjoy your movie " . $pnm . " at watchers park on " . $pdt . " with your friends and colleagues</em><br>
	// 	Total tickets booked : " . $ptc . "<br>
	// 	Total amount paid : " . $prs . "<br>";

    //         $mail->send();
    //         return true;
    //     } catch (Exception $e) {
    //         return false;
    //     }
        
    //     echo "<script>alert('')</script>";
    // }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Success</title>
</head>

<body>
    <div class="loader"></div>
    <div class='d-flex justify-content-center'>
        <div class='card' style='width: 50%;'>
            <form action="index.php" method='POST'>
                <h5 class='card-header text-uppercase text-success'>Payment successfull</h5>
                <div class='card-body'>
                    <br>
                    <p>Thank you for booking tickets from Watchers Park, enjoy your favourite movie with friends and
                        colleagues</p><br>
                    <span></span>
                </div>
                <input type="hidden" name="email" value="<?php echo $pem ?>">
                <input type="hidden" name="name" value="<?php echo $pnm ?>">
                <input type="hidden" name="date" value="<?php echo $pdt ?>">
                <input type="hidden" name="ticket" value="<?php echo $ptc ?>">
                <input type="hidden" name="price" value="<?php echo $prs ?>">
                <div class='card-footer'>
                    <button class='btn btn-success' type='submit' name='submit'>Take me to Home page</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
</script>

</html>