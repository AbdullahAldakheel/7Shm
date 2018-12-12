<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');

}
if (!$_SESSION['type']=="Admin") {
    header('Location: ../index.php');

}
require_once __DIR__ . '/../users/logout.php'; 
?>

<?php include('../users/getusers.php') ?>

<!DOCTYPE html>
<html lang="en">

    <?php   require_once __DIR__ . '/../source/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/blog-home.css" rel="stylesheet">

    <link href="c.css" rel="stylesheet">
    <script>
        function clic(element)
        {
            confirm("Are you sure you want to remove");
        }</script>
    <script>

        function myFunction() {
            document.getElementsByClassName("myP").contentEditable = true;
            document.getElementsByClassName("myH").contentEditable = true;
        }
    </script>
    <body>

        <?php require_once __DIR__ . '/../source/nav.php'; ?>


        <!-- Page Content -->
        <div class="container">

            <h1 class="my-4 text-center text-lg-left">Edit Accounts .. </h1>
            <?php include('users/errors.php'); ?>
            <?php include('users/green.php'); ?>
            <div class="row text-center text-lg-left">
                <br>      

                <style>
                    table, th, td {
                        border: 2px solid black;
                    }
                </style>

                <table style="width:700px">

                    <tr class="n">
                        <th>ID</th>
                        <th>Name</th> 
                        <th>Password</th>  
                        <th>Type</th>
                        <th>Edit</th>
                        <th>Remove</th>    
                    </tr>



                    <?php
                    $num = 1;
                    while($row = $result->fetch_array()) {


                        $nam = $row["username"];
                        $pas =  $row["password"];
                    ?>
                    <tr class="n">
                        <td> <?php echo $num ?> </td>
                        <td class="myP"><?php echo $row["username"] ?></td>
                        <td class="myH"><?php echo $pas ?></td>
                        <td><?php echo $row["type"] ?></td>  

                        <td> <a href="?edit=<?php echo $row["id"]?>"><div onclick="myFunction()" class="button2">Edit</div> </a> </td>  
                        <td> <a href="?id=<?php echo $row["id"]?>"><div  class="button2">Delete</div> </a> </td>  
                    </tr>

                    <?php
                        $num++;
                    }
                    ?>



                </table>
                <br>

                <?php
                $ed = $_GET['edit'];
                if($ed){

                    $sql = "SELECT * FROM users WHERE id='$ed'";
                    $result = $db->query($sql);
                    $nam = "";
                    $pas = "";
                    $typ = "";
                    while($row = $result->fetch_array()){
                        $nam = $row["username"];  
                        $pas = $row["password"]; 
                        $typ = $row["type"];
                    }

                ?>

                <form method="post" action="../users/getusers.php" class="formAll">


                    <br>
                    <div>
                        <label>Name    : </label>
                        <input type="text" name="name"  class="form-control" value="<?php echo $nam ?>">  
                    </div>

                    <div>
                        <label>Password: </label>
                        <input type="text" name="pass" class="form-control" value="<?php echo $pas ?>">  
                    </div>
                    <div>
                        <label>Type: </label>
                        <input type="text" name="type" class="form-control" value="<?php echo $typ ?>">  
                    </div>
                    <br>
                    <div>
                        <input class="form-control"  type="text" name="id2" value="<?php echo $ed ?>" hidden>
                        <p><input name="change" class="btn btn-secondary"  value="Change" type="submit" ></p>

                    </div>


                </form>


                <?php

                }

                ?>


            </div>
            <hr>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?php require_once __DIR__ . '/../source/footer.php'; ?>


    </body>

</html>
