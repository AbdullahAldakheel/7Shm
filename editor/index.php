
<?php 
session_start(); 
if (!isset($_SESSION['username'])) {

}
if (!$_SESSION['type']=="Admin") {
    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'index.php');

}

require_once __DIR__ . '/../users/logout.php'; 
include('../users/displayEdit.php');


?>

<!DOCTYPE html>
<html lang="en">

    <?php   require_once __DIR__ . '/../source/head.php'; ?>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">

    <!-- Custom styles for this template -->
    <link href="../css/thumbnail-gallery.css" rel="stylesheet">

    <link href="Editor-stylesheet.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="Editor-js.js">
    </script>
    <body>

        <!-- Navigation -->
        <?php require_once __DIR__ . '/../source/nav.php'; ?>


        <!-- Page Content -->

        <div class="container">

            <!-- Page Heading -->
            <h1 class="pad">Editor's page</h1>
            <?php include('../users/green.php') ?>
            <br>

            <!-- Project One -->
            <div class="cont">


                <?php
    while($row = $result->fetch_array()) {
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">
                            <img class="img-fluid rounded mb-3 mb-md-0" src="../img/<?php echo $row["img"] ?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-5" id="marg">
                        <h3><?php echo $row["title"] ?></h3>
                        <div id="bodydesc" style="margin-left:auto; margin-right:auto; width:400px; height: 200px; overflow-y: scroll;">

                            <p id="desc" style="float:left;color: #666666; width:400px; font-family: Candara,Trebuchet MS,sans-serif; font-size: 12px; font-weight: bold; border-right: thin dotted #666666; line-height: 18px;"> <?php echo $row["body"] ?> </p>
                        </div>
                        <span style="margin-left: 5px">Jounalist's Name :  <?php echo $row["jname"] ?> </span>
                        <br>
                        <form method="post" action="index.php" class="formAll">
                            <!-- هذي الازرار -->
                            <textarea  class="area" name="here" placeholder="Write your comment here" style="width: 400px" hidden><?php echo $row["postid"]?></textarea>
                            <input class="com btn btn-primary button" value="Comment" type="button" href="#">
                            <textarea  class="area" name="com" placeholder="Write your comment here" style="width: 400px" ></textarea>
                            <a class="app"  href="?app=<?php echo $row["postid"]?>"> <input class="btn btn-primary button" name="approve" value="Approve" type="button" > </a>
                            <a class="sub" href="?again=<?php echo $row["postid"]?>"><input class="btn btn-primary button" name="reject" value="Submit" type="submit"  > </a> 
                            <input class="cancel btn btn-primary button" value="Cancel" type="button"  href="#">
                        </form>
                        <!-- الى هنا -->

                    </div>

                </div>
                <hr>


                <?php
    }
            $rowcount=mysqli_num_rows($result);
            if($rowcount == 0){
                ?>
                <br>
                <h3 class="pad">There is no post need to review.</h3>
                <br>

                <?php  
            }
                ?>

            </div>


        </div>
        <!--  لا تجي هنا  -->
        <!-- <input class="can" value="" type="text"  href="#"> -->

    </body>

    <!-- /.container -->

    <!-- Footer -->
    <?php require_once __DIR__ . '/../source/footer.php'; ?>

</html>



