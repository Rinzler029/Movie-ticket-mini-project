<?php include("admin_header.php"); ?>

<?php

@include 'connection.php';

?>

<?php

$select = mysqli_query($con, "SELECT * FROM registered_users");

?>

<section class="section1">
    <h2 class="text-center text-uppercase">Registered Users</h2><br>
    <div class="d-flex justify-content-center">
        <div class="card d-flex justify-content-center" style="width:95%">
            <div class="card-header">
                <h3>Watchers Park Registered Users</h3>
            </div>
            <div>
                <?php
                    if($category_tot = mysqli_num_rows($select)){
                        echo "<br><h5 class='text-center'>Total Registered Users : $category_tot</h5>";
                    }
                    else{
                        echo "<span></span>";
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
                                <th scope="col" class="text-center">Username</th>
                                <th scope="col" class="text-center">Phone No.</th>
                                <th scope="col" class="text-center hidder">Email</th>
                            </tr>
                        </thead>
                        <?php
                        $m_no = 1;
                        while ($row = mysqli_fetch_assoc($select)) { ?>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center"><?php echo $m_no; ?></th>
                                    <td class="text-center">
                                        <p><?php echo $row['full_name']; ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p><?php echo $row['username']; ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p><?php echo $row['phone']; ?></p>
                                    </td>
                                    <td class="text-center hidder">
                                        <p><?php echo $row['email']; ?></p>
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