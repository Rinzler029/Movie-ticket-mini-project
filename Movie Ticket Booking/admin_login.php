<?php
    require("connection.php");
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
    <style>
        .admin-cards{
            padding-top: 200px;
        }
    </style>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>WP Login</title>
</head>

<body>
    <div class='d-flex justify-content-center admin-cards'>
        <div class='card' style='width: 500px;'>
            <form action="" method='POST'>
                <h5 class='card-header text-uppercase text-center bg-success text-white'>ADMIN LOGIN</h5>
                <div class='card-body text-center'>
                    <div>
                    <i class="fa-solid fa-user fa-lg"></i>&nbsp;&nbsp;&nbsp;<input type="text" name="AdminName" placeholder="Enter Admin Name">
                    </div>
                    <br>
                    <div>
                    <i class="fa-solid fa-lock fa-lg"></i>&nbsp;&nbsp;&nbsp;<input type="password" name="AdminPassword" placeholder="Enter Password">
                    </div>
                    <span class="text-danger" id="pass-er"></span>
                </div>
                <div class='card-footer text-center bg-success'>
                    <button class='btn btn-warning' type='submit' name='SignIn' style="width:50%;">Sign In</button>
                </div>
            </form>
        </div>
    </div>

    <?php

    if(isset($_POST['SignIn'])){
        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['AdminLoginId'] = $_POST['AdminName'];
            header("location: admin_page.php");
        }else{
            echo "<script> document.getElementById('pass-er').innerHTML = '<br><b>wrong admin name or password</b>'; </script>";
        }
    }

    ?>
</body>

</html>