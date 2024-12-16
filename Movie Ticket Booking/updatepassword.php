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
    <title>Password Update</title>
</head>


<?php

require("connection.php");

if (isset($_GET['email']) && isset($_GET['reset_token'])) {
    date_default_timezone_set('Asia/kolkata');
    $date = date("Y-m-d");
    $query = "SELECT * FROM `registered_users` WHERE `email`='$_GET[email]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            echo "
                <div class='d-flex justify-content-center'>
                    <div class='card' style='width: 50%;'>
                    <form method='POST'>
                        <h5 class='card-header'>UPDATE PASSWORD</h5>
                            <div class='card-body'>
                                    <br>
                                    <p><input type='password' name='password' id='password' class='popup-email'
                                    placeholder='Enter your new password' minlength='8' oninvalid='this.setCustomValidity('Password must be at least 8 characters or greater')' oninput='this.setCustomValidity('')' required></p><br>
                                    <span></span>
                                
                            </div>
                            <div class='card-footer'>
                                <button class='btn btn-success' type='submit' name='updatepassword'>UPDATE</button>
                                <input type='hidden' name='email' value='$_GET[email]'>
                            </div>
                    </form>
                    </div>
                </div>
            ";
        } else {
            echo "
            <script>
            alert('Invalid or expired link');
            window.location.href='index.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('Server down, try again later');
        window.location.href='index.php';
        </script>
        ";
    }
}

?>


<?php

if(isset($_POST['updatepassword'])) 
{
    $pass = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $update="UPDATE `registered_users` SET `password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";
    if(mysqli_query($con, $update))
    {
        echo "
        <script>
        alert('Password updated successfully!');
        window.location.href='index.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('Server down, try again later');
        window.location.href='index.php';
        </script>
        ";
    }
}
?>



<body>


</body>

</html>