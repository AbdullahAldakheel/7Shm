<?php include('users/server.php') ?>
<!DOCTYPE html>
<html lang="en">

    
<?php include'source/head.php'; ?>
  <body>
      
    <!-- Navigation -->
<?php include 'source/nav.php'; ?>

 <!-- Start Edit  -->
      <div class="formMiddle" >
      
      <h1 class="formAll">Register ..</h1>      
      
<p class="formAll">  please enter username and password for new account  </p>
      
      <form method="post" action="register.php" class="formAll">
        <?php include('users/errors.php'); ?>
      
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
  <input type="radio" name="type" value="Journalist"> Journalist<br>
 <input type="radio" name="type" value="Admin"> Admin
          </div>
          <br>
        <div>
          
            
            
                    <p><input type="submit" name="reg_user" class="btn btn-secondary"  value="Register"></p>
          </div>

      
      </form>
      
      
      
      
      
      
      </div>

      
      
      
    <!-- Stop -->
    <!-- Footer -->
<?php include'source/footer.php'; ?>


       


  </body>

</html>
