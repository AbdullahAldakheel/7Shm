<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";

  }
  if (!$_SESSION['type']=="Journalist") {
	header('Location:'.$_SERVER['DOCUMENT_ROOT'].'index.php');

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
        
      
      <h1 class="my-4">Change article</h1>
        
         <?php include('../users/errors.php') ?>
         <?php include('../users/green.php') ?>


 <form  action="../users/displaybefore.php" method="post" enctype="multipart/form-data">

     Article title<br>
     <input type="text" maxlength="30" name="title" value="<?php echo $_SESSION['title'] ?>">
     <br><br>
     Article body 
     <textarea onkeyup="auto_grow(this)" name="body"  style="width: 800px" ><?php echo $_SESSION['body'] ?></textarea>
     <br>
     upload image( the new one )  
     <br /><input type="file" name="image" required>
     <script src="upload.js"></script>
     <br><br>
       <input class="form-control"  type="text" name="id2" value="<?php echo $_SESSION['postid'] ?>" hidden>
     <input type="submit" class="button" value="Submit" name="change1">
</form>
      <hr>
      </div>
</body>
    
    
   
<?php require_once __DIR__ . '/../source/footer.php'; ?>

    <script src="Journalist%20js.js"></script>
    
</html>

 

