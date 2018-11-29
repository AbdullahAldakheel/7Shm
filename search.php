<?php 
session_start(); 

$type = $_SESSION['type'];
require_once __DIR__ . '/users/logout.php'; 
include('users/publish.php');

?>

<!DOCTYPE html>
<html lang="en">
    <?php
    $name = "pault";
    ?>

    <?php   require_once __DIR__ . '/source/head.php'; ?>
    <body>

        <!-- Navigation -->
        <?php require_once __DIR__ . '/source/nav.php'; ?>

        <!-- Page Content -->


        <div class="container">

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h5 class="my-4">WelCome To 7Shm.com
                        <small id="timeHead"></small>

                    </h5>

                    <!-- Blog Post -->
                    <?php include('users/connect.php'); ?>
                    <?php

                    if(isset($_POST['search'])){
                        $idis = $_POST['bringit'];

                        $approve = "Yes";
                        $sql = "SELECT * FROM post WHERE approve='$approve' AND body LIKE '%$idis%'";
                        $result = $db->query($sql);

                    }

                    ?>

                    <?php
                    while($row = $result->fetch_array()) {
                    ?>

                    <div class="card mb-4">
                        <img class="card-img-top" src="img/<?php echo $row["img"] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $row["title"] ?></h2>
                            <p class="card-text"><?php echo $row["body"] ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on <?php echo $row["date"] ?> by
                            <a href="#"> <?php echo $row["jname"] ?></a>
                        </div>
                    </div>

                    <?php
                    }
                    if(mysqli_num_rows($result)==0){

                    ?>

                    <h5 class="my-4">"<?php echo $_POST['bringit']; ?>" : Didn't match any post </h5>

                    <?php
                    }
                    ?>



                    <!-- Pagination -->


                </div>

                <!-- Sidebar Widgets Column -->
                <?php require_once __DIR__ . '/source/right.php'; ?>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
        <!-- Footer -->
        <?php require_once __DIR__ . '/source/footer.php'; ?>


        <!-- JavaScript -->




    </body>

</html>
