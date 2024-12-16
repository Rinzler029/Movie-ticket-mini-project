<?php include("admin_header.php"); ?>

<?php

@include 'connection.php';

$id = $_GET['edit'];

if (isset($_POST['update_product'])) {

    $product_name = $_POST['product_name'];
    $product_rating = $_POST['product_rating'];
    $product_date = $_POST['product_date'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'movies_img/' . $product_image;

    if (empty($product_name) || empty($product_rating) || empty($product_date) || empty($product_price) || empty($product_image)) {
        echo "<script> alert('Please fill full data');</script>"; 
    } else {

        $update_data = "UPDATE movies SET name='$product_name', rating='$product_rating', date='$product_date', price='$product_price', image='$product_image'  WHERE id = '$id'";
        $upload = mysqli_query($con, $update_data);

        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            header('location:admin_movies.php');
        } else {
            $$message[] = 'please fill out all!';
        }

    }
}
;

?>

<section class="section1">
    <h2 class="text-center text-uppercase">Update movie list</h2><br>
    <div class="d-flex justify-content-center">
        <div class="card d-flex justify-content-center" style="width:95%">
            <div class="card-header">
                <h3>Movie Now Showing On Watchers Park</h3>
            </div>
            <div class="card-body">
                <div class="card">
                    <?php

                    $select = mysqli_query($con, "SELECT * FROM movies WHERE id = '$id'");
                    while ($row = mysqli_fetch_assoc($select)) {

                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table" style="width:100%; margin:auto;">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4 class="text-uppercase">Update a new trailer with image</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Movie name: &nbsp;<input type="text" placeholder="enter movie name"
                                                name="product_name" value="<?php echo $row['name']; ?>" class="box"></td>
                                    </tr>
                                    <tr>
                                        <td>Movie rating: &nbsp;<input type="text" placeholder="enter movie rating"
                                                name="product_rating" value="<?php echo $row['rating']; ?>" class="box"></td>
                                    </tr>
                                    <tr>
                                        <td>Movie date: &nbsp;<input type="date"
                                                 name="product_date" value="<?php echo $row['date']; ?>" class="box"></td>
                                    </tr>
                                    <tr>
                                        <td>Movie price: &nbsp;<input type="text"
                                                placeholder="enter movie ticket price" name="product_price" value="<?php echo $row['price']; ?>" class="box"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="file" accept="image/png, image/jpeg, image/jpg"
                                                name="product_image" class="box"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" class="btn btn-success" name="update_product" value="update">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="admin_movies.php" class="btn btn-danger">go back!</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    <?php } ?>
                </div>

                <br>
            </div>
            <div class="card-footer text-body-secondary">
                © Copyright 2024. All rights reserved by Watchers Park
            </div>
        </div>
    </div>

</section>
</body>

</html>