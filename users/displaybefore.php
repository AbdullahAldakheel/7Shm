<?php
session_start();
// initializing variables
$username = "";
$errors = array(); 
$green = array(); 

// connect to the database
$db = mysqli_connect('a-dukhiel.com', 'adukhiel_Abo7Shm', '@Gu*c~zeM=w5', 'adukhiel_7shm');
    if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$approve = "No";
$sql = "SELECT * FROM post WHERE approve='$approve'";
$result = $db->query($sql);

if(isset($_POST['delteit'])){
        $idis = $_POST['getid'];
    $userdel = "DELETE FROM post WHERE postid=$idis";
    $t = $db->query($userdel);
    array_push($green, "The post has been deleted.");
      header('location: ../journalist/end.php');

}

if(isset($_POST['goedit'])){
    $idis = $_POST['getid'];
                      	$sql = "SELECT * FROM post WHERE postid='$idis'";
                    $result = $db->query($sql);
                    $title = "";
                    $body = "";
              
                    while($row = $result->fetch_array()){
                      $title = $row["title"];  
                      $body = $row["body"]; 
                    }
     $_SESSION['title'] = $title;
  	  $_SESSION['body'] = $body;
  	  $_SESSION['postid'] = $idis;
  	  header('location: ../journalist/endtmp.php');

}


      if(isset($_POST['change1'])){
    $pid = $_POST['id2'];
      $title = mysqli_real_escape_string($db, $_POST['title']);
  $body = mysqli_real_escape_string($db, $_POST['body']);
    $image = $_FILES["image"]["name"];
  $jname = $_SESSION['username'];
    $approve = "No";
  if (empty($title)) { array_push($errors, "title is required"); }
  if (empty($body)) { array_push($errors, "body is required"); }
 
       $target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
    } else {
        array_push($errors, "not image");
        
    }
    
    if ($_FILES["image"]["size"] > 500000) {
         array_push($errors, "Sorry, your file is too large.");
} 
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
         array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
} 
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    } else {
              array_push($errors, "Sorry, there was an error uploading your file.");
    }
    
    
  if (count($errors) == 0) {
    $date = date("l jS \of F Y h:i:s A");

    $query = "UPDATE post SET title='$title', body='$body', img='$image' WHERE postid='$pid'";
      	mysqli_query($db, $query);
    //$u = $db->query($userup);
    array_push($green, "The post has been changed.");
       array_push($green, $pid);
      array_push($green, $title);
      array_push($green, $body);
      header('Location: ../journalist/end.php');

}              
    
      }

?>