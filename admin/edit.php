<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";

  }
  if (!$_SESSION['type']=="Admin") {
	header('Location:'.$_SERVER['DOCUMENT_ROOT'].'index.php');

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

      <div class="row text-center text-lg-left">
          <br>      

           <form  action="edit.php" method="post">
          <?php include('../users/errors.php') ?>
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
    <td> <?php echo num ?> </td>
    <td class="myP"><?php echo $nam ?></td>
    <td class="myH"><?php echo md5($pas) ?></td>
    <td><?php echo $row["type"] ?></td>  
    <td button onclick="myFunction()" class="button2">Edit</td>
    <td>  <input  class="button2" name="remove" type="submit" value="Remove"> </td>  
  </tr>
            
    <?php
                $num++;
                    $num = $row["id"];
                if(isset($_POST['remove'])){
                      $userdel = "DELETE FROM users WHERE id='$num' ";
                      	array_push($errors, "Removed .. ");
                         $t = $db->query($userdel);
                    	
                }
    }
?>
    

		
</table>
               <br>
                <input style="float: left" type="submit" class="button button2" value="Submit"  >
          </form>
          
        
      </div>
        <hr>
    </div>
    <!-- /.container -->

    <!-- Footer -->
<?php require_once __DIR__ . '/../source/footer.php'; ?>


  </body>

</html>
