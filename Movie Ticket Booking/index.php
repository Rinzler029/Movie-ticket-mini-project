<?php include("header.php"); ?>

    <br><br>

    <h3 class="text-center">WELCOME TO WATCHERS PARK <span id="welcome" class="text-uppercase">GUEST</span></h3>

    <br><br>
    <section id="pu-movies">
        <div class="container-fluid conts-fl2">
            <h3>NOW SHOWING</h3>
            <br>
            <div class="d-flex flex-wrap">
                <?php

                $selectus = mysqli_query($con, "SELECT * FROM movies order by id desc");

                ?>
                <?php 
                    // if(isset($_POST["bksubmit"])){
                    //     $name = $_POST["bkname"];
                    //     $rating = $_POST["bkrating"];
                    //     $date = $_POST["bkdate"];
                    //     $price = $_POST["bkprice"];
                    //     $image = $_POST["bkimage"];
                    // }
                ?>
                <?php while ($mrow = mysqli_fetch_assoc($selectus)) { ?>
                    <form action="booking.php" method="POST">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                            <img src="movies_img/<?php echo $mrow['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title fs-6"><?php echo $mrow['name']; ?></h5>
                                <h6 class="card-title"><?php echo $mrow['rating']; ?></h6>
                                <br>
                                <div class="text-center"><button type="submit" name="bksubmit" class="btn btn-primary">BOOK TICKETS</button></div>
                                <input type="hidden" name="bkid" value="<?php echo $mrow['id']; ?>">
                                <input type="hidden" name="bkname" value="<?php echo $mrow['name']; ?>">
                                <input type="hidden" name="bkrating" value="<?php echo $mrow['rating']; ?>">
                                <input type="hidden" name="bkdate" value="<?php echo $mdate = date('d-M-y', strtotime($mrow['date'])); ?>">
                                <input type="hidden" name="bkprice" value="<?php echo $mrow['price']; ?>">
                                <input type="hidden" name="bkimage" value="<?php echo $mrow['image']; ?>">
                            </div>
                        </div>
                    </form>
                <?php } ?>

                <!-- <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                <img src="images/k2.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title fs-6">KINGDOM OF THE PLANET OF THE APES</h5>
                    <h6 class="card-title">U/A - English</h6>
                    <br>
                    <div class="text-center"><a href="#" class="btn btn-primary">BOOK TICKETS</a></div>
                </div>
            </div> -->
            </div>
        </div>
    </section>

    <br>

    <section>
        <div class="container-fluid conts-fl2">
            <h3>UPCOMING MOVIES</h3>
            <br>
            <div class="d-flex flex-wrap">
                <?php

                $select = mysqli_query($con, "SELECT * FROM trailers order by id desc");

                ?>

                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                        <img src="movies_img/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title fs-6" id="m_names"><?php echo $row['name']; ?></h5>
                            <h6 class="card-title"><?php echo $row['rating']; ?></h6>
                            <br>
                            <div class="text-center"><a href="<?php echo $row['link']; ?>" class="btn btn-success"
                                    onclick="plays()" target="_self" id="m_links">VIEW
                                    TRAILER</a></div>
                        </div>
                    </div>
                <?php } ?>

                <!-- <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                <img src="images/k3.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title fs-6">FIGHTER</h5>
                    <h6 class="card-title">U/A - Hindi</h6>
                    <br>
                    <div class="text-center"><a href="https://youtu.be/6amIq_mP4xM?si=oizIFo4e_1wfZP3S"
                            class="btn btn-success" data-bs-toggle="modal" data-bs-target="#trailers"
                            onclick="plays()">VIEW
                            TRAILER</a></div>
                </div>
            </div> -->

                <!-- <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                <img src="images/k4.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title fs-6">DEADPOOL & WOLVERINE</h5>
                    <h6 class="card-title">A - English</h6>
                    <br>
                    <div class="text-center"><a href="https://youtu.be/73_1biulkYk?si=VcOWoFI7O4sHUnBP" target="_blank"
                            class="btn btn-success">VIEW TRAILER</a></div>
                </div>
            </div>

            <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                <img src="images/k5.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title fs-6">MUNJYA</h5>
                    <h6 class="card-title">U/A - Hindi</h6>
                    <br>
                    <div class="text-center"><a href="https://youtu.be/qGb5aKEYR8Q?si=MpTMlxDVLj-xtQmD" target="_blank"
                            class="btn btn-success">VIEW TRAILER</a></div>
                </div>
            </div>

            <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                <img src="images/k6.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title fs-6">KILL</h5>
                    <h6 class="card-title">A - Hindi</h6>
                    <br>
                    <div class="text-center"><a href="https://youtu.be/da7lKeeS67c?si=-aFlpYj3RqNBhzOB" target="_blank"
                            class="btn btn-success">VIEW TRAILER</a></div>
                </div>
            </div> -->
            </div>
        </div>
    </section>

    <br><br>

    <!-- <div class="modal fade modal-xl" id="trailers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close trailer-btn" data-bs-dismiss="modal" aria-label="Close"
                    onclick="stops()"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="455" id="players"
                    src="" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="stops()">Close</button>
            </div>
            
        </div>
    </div>
</div>

<script>
    function plays() {
        // document.getElementById("exampleModalLabel").innerText = document.getElementById("m_names").innerText;
        document.getElementById("players").src = document.getElementById("m_links").href;
        // document.getElementById("players").src = "https://www.youtube.com/embed/6amIq_mP4xM?si=aIQLL-NdHMz0ovnM";
    }

    function stops() {
        let a = document.getElementById("players");

        if (a.src != "") {
            a.src = "";
        } else {
            a.src;
        }
    }
</script> -->


    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "
    <script>
        document.getElementById('welcome').innerText = '$_SESSION[username]';
    </script>
    ";
    } else {
        echo "
    <script>
        document.getElementById('welcome').innerText = 'GUEST';
    </script>
    ";
    }
    ?>


    <?php include("footer.php"); ?>