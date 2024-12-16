<?php include("admin_header.php"); ?>

<?php

@include 'connection.php';

if (isset($_POST['add_product'])) {

    $product_name = $_POST['product_name'];
    $product_rating = $_POST['product_rating'];
    $product_date = $_POST['product_date'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'movies_img/' . $product_image;

    if (empty($product_name) || empty($product_rating) || empty($product_date) || empty($product_price) || empty($product_image)) {
        $message[] = 'please fill out all';
    } else {
        $insert = "INSERT INTO movies(name, rating, date, price, image) VALUES('$product_name', '$product_rating', '$product_date', '$product_price', '$product_image')";
        $upload = mysqli_query($con, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'new product added successfully';
        } else {
            $message[] = 'could not add the product';
        }
    }

}
;

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM movies WHERE id = $id");
    header('location:admin_movies.php');
}
;

?>

<?php

$select = mysqli_query($con, "SELECT * FROM movies order by id desc");

?>

<section class="section1">
    <h2 class="text-center text-uppercase">Add new movies</h2><br>
    <div class="d-flex justify-content-center">
        <div class="card d-flex justify-content-center" style="width:95%">
            <div class="card-header">
                <h3>Movie Now Showing On Watchers Park</h3>
            </div>
            <div class="card-body">
                <div class="card">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <table class="table" style="width:100%; margin:auto;">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4 class="text-uppercase">add a new movie with image</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Movie name: &nbsp;<input type="text" placeholder="enter movie name"
                                            name="product_name" class="box"></td>
                                </tr>
                                <tr>
                                    <td>Movie rating: &nbsp;<input type="text" placeholder="enter movie rating"
                                            name="product_rating" class="box"></td>
                                </tr>
                                <tr>
                                    <td>Movie date: &nbsp;<input type="date"
                                             name="product_date" class="box"></td>
                                </tr>
                                <tr>
                                    <td>Movie ticket price: &nbsp;<input type="number"
                                            placeholder="enter movie ticket price" name="product_price" class="box"></td>
                                </tr>
                                <tr>
                                    <td><input type="file" accept="image/png, image/jpeg, image/jpg"
                                            name="product_image" class="box"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-success" name="add_product" value="Add">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

                <br>
                <div class="card">
                    <table class="table" style="width:100%; margin:auto;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center hidder">No.</th>
                                <th scope="col" class="text-center hidder">Poster</th>
                                <th scope="col" class="text-center">Movie Name</th>
                                <th scope="col" class="text-center hidder">Movie Rating</th>
                                <th scope="col" class="text-center">Movie Date</th>
                                <th scope="col" class="text-center">Movie Price</th>
                                <th scope="col" class="text-center">Update</th>
                                <th scope="col" class="text-center hidder">Delete</th>
                            </tr>
                        </thead>
                        <?php
                        $m_no = 1;
                        while ($row = mysqli_fetch_assoc($select)) { ?>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center hidder"><?php echo $m_no; ?></th>
                                    <td class="text-center hidder"><img src="movies_img/<?php echo $row['image']; ?>"
                                            height="100" id="imgs-php" alt=""></td>
                                    <td class="text-center">
                                        <p><?php echo $row['name']; ?></p>
                                    </td>
                                    <td class="text-center hidder">
                                        <p><?php echo $row['rating']; ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p><?php
                                        echo $mdate = date('d-M-y', strtotime($row['date'])); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p><?php echo $row['price']; ?></p>
                                    </td>
                                    <td class="text-center"><a href="update_movies.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"> <i
                                                class="fas fa-edit"></i> edit </a></td>
                                    <td class="text-center hidder"><a href="admin_movies.php?delete=<?php echo $row['id']; ?>"
                                            class="btn btn-danger"> <i class="fas fa-trash"></i> DELETE </a></td>
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