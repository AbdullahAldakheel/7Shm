<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
      	    header('Location: ../index.php');

  }
  if (!($_SESSION['username'])==="Admin") {
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
    <!-- Custom styles for this template -->
      <link href="c.css" rel="stylesheet">
  <body>

    <!-- Navigation -->
      
<?php require_once __DIR__ . '/../source/nav.php'; ?>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-left">Admin Page .. </h1>

      <div class="row text-center text-lg-left">
          <br>
          <a href="register.php"><button class="button button2">Add</button></a>
         <a href="edit.php"> <button class="button button2">Edit</button></a>
      </div>
        <hr>
    </div>
    <!-- /.container -->

    <!-- Footer -->
<?php require_once __DIR__ . '/../source/footer.php'; ?>

  </body>

</html>
