<?php include('users/server.php') ?>
<!DOCTYPE html>
<html lang="en">


    <?php include'source/head.php'; ?>
    <body>

        <!-- Navigation -->
        <?php include 'source/nav.php'; ?>

        <!-- Start Edit  -->
        <div class="formMiddle" >

            <h1 class="formAll">Log in ..</h1>      

            <p class="formAll">  please enter your username and password  </p>

            <form method="post" action="login.php" class="formAll">
                <?php include('users/errors.php'); ?>

                <div>
                    <label>Name    : </label>
                    <input type="text" name="username"  class="form-control" required>  
                </div>

                <div>
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control" required>  
                </div>
                <br>
                <div>

                    <p><input type="submit" name="login_user" class="btn btn-secondary"  value="Log In"></p>
                </div>


            </form>






        </div>




        <!-- Stop -->
        <!-- Footer -->
        <?php include'source/footer.php'; ?>





    </body>

</html>
