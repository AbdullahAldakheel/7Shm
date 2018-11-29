<?php 
session_start(); 
include('del.php');
if (!isset($_SESSION['username'])) {

}
if (!$_SESSION['type']=="Journalist") {
	    header('Location: ../index.php');

}
require_once __DIR__ . '/../users/logout.php'; 

require_once __DIR__ . '/../users/displaybefore.php'; 
?>

<!DOCTYPE html>
<html lang="en">

    <?php   require_once __DIR__ . '/../source/head.php'; ?>
    <link href="Journalist Stylesheet.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/1-col-portfolio.css" rel="stylesheet">
    <body>

        <?php require_once __DIR__ . '/../source/nav.php'; ?>



        <div class="container">
            <h1 class="my-4">Edit and delete</h1>

            <?php include('../users/errors.php') ?>


            <?php
    while($row = $result->fetch_array()) { 
        $tmp = $row["postid"];
            ?>



            <div class="row">
                <div class="col-md-7">
                    <a href="#">

                        <img class="img-fluid rounded mb-3 mb-md-0" src="../img/<?php echo $row["img"] ?>" alt="">

                    </a>
                </div>
                <div class="col-md-5">

                    <form  action="../users/displaybefore.php"  method="post">

                        <p id="myP" maxlength="30">title : <?php echo $row["title"] ?></p>
                        <p id="myP1" onkeyup="auto_grow(this)" > <?php echo $row["body"] ?></p>
                        <p>Comment : <?php echo $row["comment"] ?></p>
                        <p>By : <?php echo $row["ename"] ?></p>
                        <input name="getid"  value="<?php echo $row["postid"] ?>" hidden>



                        <input onclick="myFunction()" class="button bt1" type="submit" name="delteit" value="Delete">

                        <p name="deletenum" hidden><?php echo $tmp ?></p>
                        <div class=bbbb>
                            <input onclick="myFunction()" class="button bt1" type="submit" name="goedit" value="Edit">
                            <button  onclick="myFunction1()" class="button bt3" hidden>Cancel</button>

                        </div>

                        <p class="demo"></p>




                    </form>



                </div>
            </div>

            <hr>

            <?php
                if(isset($_POST['remove'])){
                    $userdel = "DELETE FROM post WHERE postid='$tmp' ";
                    array_push($errors, "Removed .. ");
                    $t = $db->query($userdel);

                }

    }
            if(mysqli_num_rows($result)==0){

            ?>

            <h5 class="my-4">You dont have any post</h5>

            <?php
            }
            ?>


        </div>

    </body>

    <?php require_once __DIR__ . '/../source/footer.php'; ?>



    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Journalist%20js.js"></script>



</html>
