<?php include("header.php"); ?>

<?php

@include 'connection.php';

if (isset($_POST['add_product'])) {

    // $productid = $_POST['product_id'];
    $productname = $_POST['product_name'];
    $productrating = $_POST['product_rating'];
    $producttime = "7:30 PM";
    $productdate = $_POST['product_date'];
    $productuser = $_POST['username'];
    $productemail = $_POST['email'];
    $productticket = $_POST['tickets'];
    $productcosts = $_POST['costs'];

    /*if($_POST['email']!='') {
        header("location:pay.php");
    }*/


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
}
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
                    <img src="movies_img/<?php echo $_POST["product_img"]; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <!-- <form method="post" enctype="multipart/form-data"> -->
                            <h5 class="card-title">Movie Name : <?php echo $_POST["product_name"]; ?></h5>
                            <br>
                            <p class="card-text">Movie Rating : <?php echo $_POST["product_rating"]; ?></p>
                            <p class="card-text">Movie Time : <?php echo $_POST["product_time"]; ?> , Parul
                            University Campus, Ground opposite to Temple, Gujarat 391760</p>
                            <p class="card-text">Movie Date : <?php echo $_POST["product_date"]; ?></p>
                            <p class="card-text">Buyer Name : <?php echo $_POST["username"]; ?></p>
                            <p class="card-text">Buyer Email : <?php echo $_POST["email"]; ?></p>
                            <p class="card-text">Number of tickets : <?php echo $_POST['tickets'] ?></p>
                            <p class="card-text">Total Amount : ₹<?php echo $_POST['costs'] ?></p>
                            


                            <!-- <input type="text" name="product_id" value="<?php echo $_POST["bkid"]; ?>" hidden>
                            <input type="text" name="product_name" value="<?php echo $_POST["bkname"]; ?>" hidden>
                            <input type="text" name="product_rating" value="<?php echo $_POST["bkrating"]; ?>" hidden>
                            <input type="text" name="product_time" value="7:30 pm" hidden>
                            <input type="text" value="<?php echo $_POST["bkdate"]; ?>" name="product_date" hidden>
                            <input type="number" name="tickets" id="tickets2" value="" hidden>
                            <input type="number" name="costs" id="costs2" value="" hidden> -->
                            <p class="card-text"><button type="submit"
                                    data-productname="<?php echo $_POST['product_name'] ?>"
                                    data-productrate="<?php echo $_POST['product_rating'] ?>"
                                    data-producttime="<?php echo $_POST['product_time'] ?>"
                                    data-productdate="<?php echo $_POST['product_date'] ?>"
                                    data-productuser="<?php echo $_POST['username'] ?>"
                                    data-productemail="<?php echo $_POST['email'] ?>"
                                    data-producttickets="<?php echo $_POST['tickets'] ?>"
                                    data-productpayment="<?php echo $_POST['costs'] ?>"
                                    class="btn btn-success button-pays" name="add_product">Proceed
                                    Payment</button></p>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

// echo "
//         <script>
//             let p = Number(document.getElementById('values').innerText);
//             document.getElementById('costs').value = p;
//             document.getElementById('costs2').value = p;
//             document.getElementById('tickets2').value = 1;
//             let i = 1;
//             function adds() {
//                 if (i >= 10) {
//                     i -= 1;
//                     p -= Number(document.getElementById('values').innerText);
//                 }

//                 i += 1;
//                 p += Number(document.getElementById('values').innerText);;
//                 document.getElementById('tickets').value = i;
//                 document.getElementById('costs').value = p;

//                 document.getElementById('tickets2').value = document.getElementById('tickets').value;
//                 document.getElementById('costs2').value = document.getElementById('costs').value;


//             }

//             function removes() {
//                 if (i <= 1) {
//                     i += 1;
//                     p += Number(document.getElementById('values').innerText);
//                 }

//                 i -= 1;
//                 p -= Number(document.getElementById('values').innerText);;
//                 document.getElementById('tickets').value = i;
//                 document.getElementById('costs').value = p;

//                 document.getElementById('tickets2').value = document.getElementById('tickets').value;
//                 document.getElementById('costs2').value = document.getElementById('costs').value;
//             }
//         </script>

//         ";
?>

<?php
// if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
//     echo "
//     <script>
//         document.getElementById('username').value = '$_SESSION[username]';
//         document.getElementById('email').value = '$_SESSION[email]';
//     </script>
//     ";
// } else {
//     echo "
//     <script>
//         document.getElementById('username').value = '';
//         document.getElementById('email').value = '';
//     </script>
//     ";
// }
?>

<br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

$(".button-pays").click(function()
{

// var productid=$(this).attr('data-productid');
var productname=$(this).attr('data-productname');
var productrate=$(this).attr('data-productrate');
var producttime=$(this).attr('data-producttime');
var productdate=$(this).attr('data-productdate');
var productuser=$(this).attr('data-productuser');
var productemail=$(this).attr('data-productemail');
var producttickets=$(this).attr('data-producttickets');
var productpayment=$(this).attr('data-productpayment');

// alert(productname);
	
var options = {
    "key": "rzp_test_jSroXp6tWIdJpE", //"rzp_test_zHhNFsppG7bIjH",Enter the Key ID generated from the Dashboard
    "amount": productpayment*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "name": "Watchers Park",
    "description": productname,
    "image": "https://n-lightenment.com/wp-content/uploads/2015/10/movie-night11.jpg",
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
		
		$.ajax({
			url:"payment-process.php",
			type:"POST",
			data:{payment_id:paymentid,p_name:productname,p_rating:productrate,p_time:producttime,p_date:productdate,p_username:productuser,p_email:productemail,p_tickets:producttickets,p_payment:productpayment},
			success:function(finalresponse)
			{
				if(finalresponse=='done')
				{
					// window.location.href="http://localhost/demo%20files%202/success.php?p_em="+productemail+"&p_nm="+productname+"&p_dt="+productdate+"&p_tc="+producttickets+"&p_rs="+productpayment;
                    window.location.href="http://localhost/demo%20files%202/send.php?p_em="+productemail+"&p_nm="+productname+"&p_dt="+productdate+"&p_tc="+producttickets+"&p_rs="+productpayment;

				}
				else 
				{
					alert('Please check console.log to find error');
					console.log(finalresponse);
				}
			}
		})
        
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
 e.preventDefault();
});
</script>

<?php include("footer.php"); ?>