<?php include("header.php"); ?>
<?php @include 'connection.php'; ?>
<br><br>

<h3 class="text-center">BOOKING HISTORY</h3>

<br><br>

<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
?>
<section>
<table class="table" style="width:100%; margin:auto;">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center hidder">Rating</th>
                    <th scope="col" class="text-center hidder">Time</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center hidder">Username</th>
                    <th scope="col" class="text-center hidder">Email</th>
                    <th scope="col" class="text-center">Tickets</th>
                    <th scope="col" class="text-center">Payment</th>
                </tr>
            </thead>
<?php
    $select = mysqli_query($con, "SELECT * FROM booked WHERE `email`='$_SESSION[email]'");
    $m_no = 1;
    while ($row = mysqli_fetch_assoc($select)) { ?>
            <tbody>
                <tr>
                    <th scope="row" class="text-center"><?php echo $m_no; ?></th>
                    <td class="text-center">
                        <p><?php echo $row['name']; ?></p>
                    </td>
                    <td class="text-center hidder">
                        <p><?php echo $row['rating']; ?></p>
                    </td>
                    <td class="text-center hidder">
                        <p><?php echo $row['time']; ?></p>
                    </td>
                    <td class="text-center">
                        <p><?php
                        echo $mdate = date('d-M-y', strtotime($row['date'])); ?></p>
                    </td>
                    <td class="text-center hidder">
                        <p><?php echo $row['username']; ?></p>
                    </td>
                    <td class="text-center hidder">
                        <p><?php echo $row['email']; ?></p>
                    </td>
                    <td class="text-center">
                        <p><?php echo $row['tickets']; ?></p>
                    </td>
                    <td class="text-center">
                        <p><?php echo $row['payment']; ?></p>
                    </td>
                </tr>
            </tbody>
            
            <?php $m_no++;
    } ?>
</table>
</section>
<?php } else {
    echo "
    <section>
    <div class='container-fluid'>
        <div class='card book-card text-center'>
            <div class='card-body'>
                <h5 class='card-title'>Sorry Guest, You have to LOGIN IN / SIGN UP to view your booking history</h5>
                <br>
                <h5 class='card-subtitle mb-2 text-body-secondary'>Benefits of SIGNING UP</h5>
                <p class='card-text'></p>
                <ul class='text-start card-text'>
                    <li>You'll get notifications straight to your inbox about upcoming films, exclusive screenings, live
                        sports matches and all other things related to entertainment at Parul University.</li>
                    <li>You can share your suggestions with us, and we’ll do our best to bring the most requested films
                        to Watchers Park. </li>
                    <li>You can view your booking history to remember Beautiful and Exciting Filmy memories you spent
                        with your friends in Watchers Park.</li>
                    <li>You may get a chance of being exclusive member of Watchers Park.... and many more</li>
                </ul>
            </div>
        </div>
    </div>
</section>
    ";
}
?>
    <!-- <section>
        <div class="container-fluid">
            <div class="card book-card text-center">
                <div class="card-body">
                    <h5 class="card-title">Sorry Guest, You have to LOGIN IN / SIGN UP to view your booking history</h5>
                    <br>
                    <h5 class="card-subtitle mb-2 text-body-secondary">Benefits of SIGNING UP</h5>
                    <p class="card-text"></p>
                    <ul class="text-start card-text">
                        <li>You'll get notifications straight to your inbox about upcoming films, exclusive screenings,
                            live
                            sports matches and all other things related to entertainment at Parul University.</li>
                        <li>You can share your suggestions with us, and we’ll do our best to bring the most requested
                            films
                            to Watchers Park. </li>
                        <li>You can view your booking history to remember Beautiful and Exciting Filmy memories you
                            spent
                            with your friends in Watchers Park.</li>
                        <li>You may get a chance of being exclusive member of Watchers Park.... and many more</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <br><br>
    <br><br>

    <?php include("footer.php"); ?>