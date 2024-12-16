<?php include("header.php"); ?>

<?php 

@include 'connection.php';

// if (isset($_POST['add_product'])) {

//     $_SESSION['product_name'] = $_POST['product_name'];
//     $_SESSION['product_rating'] = $_POST['product_rating'];
//     $_SESSION['product_time'] = "7:30 PM";
//     $_SESSION['product_date'] = $_POST['product_date'];
//     $_SESSION['product_username'] = $_POST['username'];
//     $_SESSION['product_email'] = $_POST['email'];
//     $_SESSION['product_tickets'] = $_POST['tickets'];
//     $_SESSION['product_price'] = $_POST['costs'];

//     if($_POST['email']!='') {
//         header("location:pay.php");
//     }


/*  $product_name = $_POST['product_name'];
    $product_rating = $_POST['product_rating'];
    $product_time = "7:30 PM";
    $product_date = $_POST['product_date'];
    $product_username = $_POST['username'];
    $product_email = $_POST['email'];
    $product_tickets = $_POST['tickets'];
    $product_price = $_POST['costs'];

    $insert = "INSERT INTO `booked`(`name`, `rating`, `time`, `date`, `username`, `email`, `tickets`, `payment`) VALUES ('$product_name','$product_rating','$product_time','$product_date','$product_username','$product_email','$product_tickets','$product_price')";
    $upload = mysqli_query($con, $insert);
    if ($upload) {
        echo '<script type="text/javascript">
        window.location.href = "success.php";
        </script>';
        exit();
    } else {
        echo "<script>alert('error in sql');</script>";
    }
*/
// }
;

?>

<br><br>

        <h3 class="text-center">BOOKING TICKETS</h3>

        <br><br>

        <section>
            <div class="container-fluid">
                <div class="card mb-5 col-md-8 book-card d-flex align-center">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="movies_img/<?php echo $_POST["bkimage"];?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form action="confirm.php" method="post" enctype="multipart/form-data">
                                    <h5 class="card-title"><?php echo $_POST["bkname"];?></h5>
                                    <p class="card-text"><?php echo $_POST["bkrating"];?></p>
                                    <p class="card-text"><i class="fa-regular fa-clock"></i>&nbsp; 7:30 pm : Parul
                                        University Campus, Ground opposite to Temple, Gujarat 391760</p>
                                    <p class="card-text"><i class="fa-solid fa-calendar-days"></i>&nbsp; <?php echo $_POST["bkdate"];?></p>
                                    <p class="card-text"><i class="fa-solid fa-user"></i>&nbsp; <input type="text"
                                            name="username" id="username" placeholder="Enter your name" style="width: 40%" required></p>
                                    <p class="card-text"><i class="fa-solid fa-envelope"></i>&nbsp; <input type="email"
                                            name="email" id="email" placeholder="Enter your email" style="width: 40%" required></p>
                                    <p class="card-text"><i class="fa-solid fa-ticket"></i>&nbsp; Number of tickets :
                                        <input type="number" id="tickets" min="1" max="10" value="1"
                                            disabled>&nbsp; <button type="button" class="btn btn-info"
                                            onclick="adds()">add</button>&nbsp;<button type="button"
                                            class="btn btn-info" onclick="removes()">remove</button></p>
                                    <p class="card-text">Total :&nbsp; <i class="fa-solid fa-indian-rupee-sign"></i> <input
                                            type="text" id="costs" disabled></p>
                                            <span id="values" hidden><?php echo $_POST["bkprice"];?></span>

                                    <input type="hidden" name="product_img" value="<?php echo $_POST['bkimage']; ?>">
                                    <input type="text" name="product_name" value="<?php echo $_POST["bkname"];?>" hidden>
                                    <input type="text" name="product_rating" value="<?php echo $_POST["bkrating"];?>" hidden>
                                    <input type="text" name="product_time" value="7:30 pm" hidden>
                                    <input type="text" value="<?php echo $_POST["bkdate"];?>" name="product_date" hidden>
                                    <input type="number" name="tickets" id="tickets2" value="" hidden>
                                    <input type="number" name="costs" id="costs2" value="" hidden>
                                    <p class="card-text"><button type="submit" class="btn btn-success" name="add_product">Submit</button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php

        echo "
        <script>
            let p = Number(document.getElementById('values').innerText);
            document.getElementById('costs').value = p;
            document.getElementById('costs2').value = p;
            document.getElementById('tickets2').value = 1;
            let i = 1;
            function adds() {
                if (i >= 10) {
                    i -= 1;
                    p -= Number(document.getElementById('values').innerText);
                }

                i += 1;
                p += Number(document.getElementById('values').innerText);;
                document.getElementById('tickets').value = i;
                document.getElementById('costs').value = p;

                document.getElementById('tickets2').value = document.getElementById('tickets').value;
                document.getElementById('costs2').value = document.getElementById('costs').value;


            }

            function removes() {
                if (i <= 1) {
                    i += 1;
                    p += Number(document.getElementById('values').innerText);
                }

                i -= 1;
                p -= Number(document.getElementById('values').innerText);;
                document.getElementById('tickets').value = i;
                document.getElementById('costs').value = p;

                document.getElementById('tickets2').value = document.getElementById('tickets').value;
                document.getElementById('costs2').value = document.getElementById('costs').value;
            }
        </script>

        ";
        ?>

<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    echo "
    <script>
        document.getElementById('username').value = '$_SESSION[username]';
        document.getElementById('email').value = '$_SESSION[email]';
    </script>
    ";
} else {
    echo "
    <script>
        document.getElementById('username').value = '';
        document.getElementById('email').value = '';
    </script>
    ";
}
?>

        <br><br>

<?php include("footer.php"); ?>