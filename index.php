<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";

}
$type = $_SESSION['type'];

if (!isset($_SESSION['type'])) {
    $_SESSION['msg'] = "You must log in first";

}
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
                    <?php require_once __DIR__ . '/source/post.php'; ?>



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


        <script src= "js/load.js"></script>


    </body>

</html>
