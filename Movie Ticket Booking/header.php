<?php
require('connection.php');
session_start();

$sqls = "SELECT * FROM posters order by id desc";

$querys = mysqli_query($con, $sqls);

$li = "";
$i = 0;


$div = "";
while ($row = mysqli_fetch_array($querys)) {

    if ($i == 0) {


        $li .= '<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '" class="active"></li>';

        $div .= '<div class="carousel-item active">
      <img src="uploaded_img/' . $row['image'] . '" class="d-block w-100" alt="...">
    ';
    } else {
        $li .= '<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '"></li>';

        $div .= '<div class="carousel-item ">
      <img src="uploaded_img/' . $row['image'] . '" class="d-block w-100" alt="...">
    ';
    }

    $div .= '</div>';

    $i++;

}

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
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <title>Watchers Park</title>
</head>

<body>
    <div class="loader"></div>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid conts-fl">
                <div class="collapse navbar-collapse d-flex justify-content-between logos" id="navbarSupportedContent">
                </div>
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img class="logo" src="images/logo.png" alt="logo">
                    </a>
                    <!-- <h3 class="fw-semibold text-white align-center">Watchers Park</h3> -->
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active navs-icons" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active navs-icons" href="index.php#pu-movies">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active navs-icons" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active navs-icons" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active navs-icons" href="bookinghistory.php">Booking History</a>
                    </li>
                </ul>
                <form class="d-flex hambgs" role="search">
                    <!-- <button class="btn btn-danger fs-5 sign-ups" type="submit">SIGN UP</button> -->
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                        echo "
                                <a href='logout.php' class='btn btn-danger fs-5 sign-ups' type='button'>LOGOUT</a>
                            ";
                    } else {
                        echo "
                                <button class='btn btn-danger fs-5 sign-ups' data-bs-target='#popup-signup'
                                data-bs-toggle='modal' type='button'>SIGN UP</button>
                            ";
                    }
                    ?>

                </form>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <i class="fas fa-bars hambg fa-xl"></i>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Watchers Park</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <br>
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <br>
                            <a class="nav-link active" href="index.php#pu-movies">Movies</a>
                        </li>
                        <li class="nav-item">
                            <br>
                            <a class="nav-link active" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <br>
                            <a class="nav-link active" href="contactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <br>
                            <a class="nav-link active" href="bookinghistory.php">Booking History</a>
                        </li>
                        <li class="nav-item">
                            <br><br>
                            <a class="btn btn-danger fs-5" type="submit" data-bs-target="#popup-signup"
                                data-bs-toggle="modal">SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <div>
        <div id="carouselExampleIndicators" class="carousel slide mslides" data-bs-ride="carousel"
            data-bs-interval="3000">
            <ol class="carousel-indicators">
                <?php echo $li; ?>
            </ol>
            <div class="carousel-inner">
                <?php echo $div; ?>
            </div>
        </div>
        