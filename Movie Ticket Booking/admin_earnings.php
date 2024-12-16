<?php include("admin_header.php"); ?>

<?php

@include 'connection.php';

?>

<?php

$select = mysqli_query($con, "SELECT * FROM booked");

?>

<section class="section1">
    <h2 class="text-center text-uppercase">Bookings</h2><br>
    <div class="d-flex justify-content-center">
        <div class="card d-flex justify-content-center" style="width:95%">
            <div class="card-header">
                <h3>Watchers Park Bookings</h3>
            </div>
            <div>
                <?php
                    $myprices = "SELECT SUM(payment) FROM booked";
                    $myrows = mysqli_query($con,$myprices);
                    while($runs = mysqli_fetch_array($myrows)){
                        echo "<br><h5 class='text-center'>Total Collection : ".$runs['SUM(payment)']."</h5>";
                    }
                ?>
            </div>
            <div class="card-body">

                <br>
                <div class="card">
                    <table class="table" style="width:100%; margin:auto;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center hidder">Rating</th>
                                <th scope="col" class="text-center hidder">Time</th>
                                <th scope="col" class="text-center">Date</th>
                                <th scope="col" class="text-center">Username</th>
                                <th scope="col" class="text-center hidder">Email</th>
                                <th scope="col" class="text-center">Tickets</th>
                                <th scope="col" class="text-center hidder">Payment</th>
                            </tr>
                        </thead>
                        <?php
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
                                    <td class="text-center">
                                        <p><?php echo $row['username']; ?></p>
                                    </td>
                                    <td class="text-center hidder">
                                        <p><?php echo $row['email']; ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p><?php echo $row['tickets']; ?></p>
                                    </td>
                                    <td class="text-center hidder">
                                        <p><?php echo $row['payment']; ?></p>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $m_no++;
                        } ?>
                    </table>
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                © Copyright 2024. All rights reserved by Watchers Park
            </div>
        </div>
    </div>

</section>
</body>

</html>