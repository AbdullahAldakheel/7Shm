<?php include('../users/server.php') ?>
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
<!DOCTYPE html>
<html lang="en">

    
<?php   require_once __DIR__ . '/../source/head.php'; ?>
       <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
          <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/blog-home.css" rel="stylesheet">
  <body>
      
    <!-- Navigation -->
<?php require_once __DIR__ . '/../source/nav.php'; ?>

 <!-- Start Edit  -->
      <div class="formMiddle" >
      
      <h1 class="formAll">Register ..</h1>      
      
<p class="formAll">  please enter username and password for new account  </p>
      
      <form method="post" action="register.php" class="formAll">
         <?php include('../users/errors.php') ?>
          <?php include('../users/green.php') ?>

      
        <div>
          <label>Name    : </label>
          <input type="text" name="username"  class="form-control">  
        </div>
      
        <div>
          <label>Password: </label>
          <input type="password" name="pass" class="form-control">  
        </div>
          
          <div>
<label>Select Type : </label> 
<br>
  <input type="radio" name="type" value="Editor" checked> Editor<br>
  <input type="radio" name="type" value="Journalist"> Journalist
          </div>
          <br>
        <div>
          
            
            
                    <p><input type="submit" name="reg_user" class="btn btn-secondary"  value="Register"></p>
          </div>

      
      </form>
      
      
      
      
      
      
      </div>

      
      
      
    <!-- Stop -->
    <!-- Footer -->
<?php require_once __DIR__ . '/../source/footer.php'; ?>


       


  </body>

</html>
