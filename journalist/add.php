<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";

  }
  if (!$_SESSION['type']=="Journalist") {
	header('Location:'.$_SERVER['DOCUMENT_ROOT'].'index.php');

  }
 require_once __DIR__ . '/../users/logout.php'; 
?>

<?php include('../users/addpost.php') ?>

<!DOCTYPE html>
<html lang="en">
    
    
<?php   require_once __DIR__ . '/../source/head.php'; ?>
    
        <link href="Journalist Stylesheet.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/1-col-portfolio.css" rel="stylesheet">
  <body> 
     
    <?php require_once __DIR__ . '/../source/nav.php'; ?>


 
    <div class="container">
        
      
      <h1 class="my-4">Add article</h1>
        
         <?php include('../users/errors.php') ?>

 <form  action="add.php" method="post" enctype="multipart/form-data">

     Article title<br>
     <input type="text" maxlength="30" placeholder="Insert title here" name="title">
     <br><br>
     Article body 
     <textarea onkeyup="auto_grow(this)" name="body" placeholder="Write the article here" style="width: 800px" ></textarea>
     <br>
     upload image  
     <br /><input type="file" name="image">
     <script src="upload.js"></script>
     <br><br>
     
     <input type="submit" class="button" value="Submit" name="post">
</form>
      <hr>
      </div>
</body>
    
    
   
<?php require_once __DIR__ . '/../source/footer.php'; ?>

    <script src="Journalist%20js.js"></script>
    
</html>

 

