<?php

    $con = mysqli_connect("sql305.infinityfree.com","if0_37477117","bvkyb5ZWoC2h5","if0_37477117_movie_db");
    if (mysqli_connect_errno()) {
        echo"<script>alert('cannot connect to database');</script>";
        exit();
    }

?>