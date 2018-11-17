<!DOCTYPE html>
<html lang="en">

    
<?php include'source/head.php'; ?>
  <body>
      
    <!-- Navigation -->
<?php include 'source/nav.php'; ?>

 <!-- Start Edit  -->
      
<h1>Log in ..</h1>      
      
<p>  please enter your username and password  </p>
      
      <form method="post" action="users/form.php" >
      
      
        <div>
          <label>Name: </label>
          <input type="text" name="user" required>  
        </div>
      
        <div>
          <label>Password: </label>
          <input type="password" name="pass" required>  
        </div>
      
          <p><input type="submit" name="submit" value="Log In"></p>
      
      </form>
      
      
      
    <!-- Stop -->
    <!-- Footer -->
<?php include'source/footer.php'; ?>


       


  </body>

</html>
