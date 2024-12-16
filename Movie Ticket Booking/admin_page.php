<?php include("admin_header.php"); ?>
<?php

@include 'connection.php';

?>

<?php

$select = mysqli_query($con, "SELECT * FROM registered_users");

?>


<section class="section1">
    <h2 class="text-center text-uppercase">Welcome to the admin page of watchers park</h2><br>
    <div class="d-flex justify-content-center">
        <div class="card d-flex justify-content-center" style="width:95%">
            <div class="card-header">
                <h3>Dashboard</h3>
            </div>
            <div class="card-body d-flex justify-content-between flex-wrap">
                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/users.jpg" class="img-fluid rounded-start dash-imgs" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Registered Users</h4>
                                <br>
                                <div class="d-flex">
                                    <i class="fa-solid fa-user admin-users-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <p class="admin-users-text"><a href="admin_users.php"
                                            class="btn btn-success">Open</a></p>
                                </div>
                                <p class="card-text"><small class="text-body-secondary">as per our database</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/boxoffice.jpg" class="img-fluid rounded-start dash-imgs" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Add Movie</h4>
                                <br>
                                <div class="d-flex">
                                    <i class="fa-solid fa-ticket admin-users-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <p class="admin-users-text"><a href="admin_movies.php"
                                            class="btn btn-success">Open</a></p>
                                </div>
                                <p class="card-text"><small class="text-body-secondary">as per our database</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/trailer.jpg" class="img-fluid rounded-start dash-imgs" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Add Trailer</h4>
                                <br>
                                <div class="d-flex">
                                    <i class="fa-solid fa-image admin-users-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <p class="admin-users-text"><a href="admin_trailers.php"
                                            class="btn btn-success">Open</a></p>
                                </div>
                                <p class="card-text"><small class="text-body-secondary">as per our database</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="card-footer text-body-secondary">
            © Copyright 2024. All rights reserved by Watchers Park
        </div>
        <div class="card">
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
        </div>
    </div>
    </div>

</section>
<br><br>
</body>

</html>