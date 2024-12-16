<?php
    session_start();
    if (!isset($_SESSION['AdminLoginId'])){
        header('location:admin_login.php');
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
    <link rel="stylesheet" href="admin_style.css">
    <link href="admin_style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>WP Admin</title>
</head>

<body>
    <div class="loader"></div>
    <header>
        <nav class="navbar navbar-dark bg-success fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WP - Admin Page</a>
                <button class="navbar-toggler hambg" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon hambg-color"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php echo $_SESSION['AdminLoginId']?></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="admin_page.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="admin_bgpage.php">Add Poster</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="admin_movies.php">Add Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="admin_trailers.php">Add Trailers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="admin_users.php">Registered Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="admin_earnings.php">Bookings</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search" method="POST">
                            <button class="btn btn-danger" type="submit" name="logout">LOGOUT</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("location:admin_login.php");
    }
    ?>

<script>
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
</script>