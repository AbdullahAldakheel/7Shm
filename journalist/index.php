<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";

}
if (!$_SESSION['type']=="Journalist") {
    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'index.php');

}
require_once __DIR__ . '/../users/logout.php'; 
?>
<!DOCTYPE html>
<html lang="en">


    <?php   require_once __DIR__ . '/../source/head.php'; ?>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Journalist Stylesheet.css" rel="stylesheet">
    <body>

        <?php require_once __DIR__ . '/../source/nav.php'; ?>


        <div class="container">

            <h1 class="my-4 text-center text-lg-left">Journalist's page</h1>

            <a href="add.php"> <button  class="button button2">Add</button></a> 
            <a href="end.php"> <button  class="button button2">Edit and delete</button></a>
            <hr>
        </div>


    </body>

    <?php require_once __DIR__ . '/../source/footer.php'; ?>




</html>
