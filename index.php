<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";

  }
  if (!isset($_SESSION['type'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
    unset($_SESSION['type']);
  }
?>
<!DOCTYPE html>
<html lang="en">

    
<?php include'source/head.php'; ?>
  <body>
      
    <!-- Navigation -->
<?php include 'source/nav.php'; ?>

 <!-- Page Content -->


    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

             <h5 class="my-4">WelCome To 7Shm.com
            <small id="timeHead"></small>

          </h5>

          <!-- Blog Post -->
          <?php include'source/post.php'; ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
         <?php include'source/right.php'; ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
<?php include'source/footer.php'; ?>


    <!-- JavaScript -->

      
          <script src= "js/load.js"></script>


  </body>

</html>
