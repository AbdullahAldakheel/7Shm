<?php
session_start();
// initializing variables
$title = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('a-dukhiel.com', 'adukhiel_Abo7Shm', '@Gu*c~zeM=w5', 'adukhiel_7shm');
    if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


if (isset($_POST['post'])) {

    
    
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $body = mysqli_real_escape_string($db, $_POST['body']);
    $image = $_FILES["image"]["name"];
  $jname = $_SESSION['username'];
    $approve = "No";
    // $target = "../img/".basename($img);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($title)) { array_push($errors, "title is required"); }
  if (empty($body)) { array_push($errors, "body is required"); }
 
// img check
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


  	$query = "INSERT INTO post (title, body, img, jname, approve) 
  			  VALUES(' $title', '$body', '$image', '$jname', '$approve')";
  	mysqli_query($db, $query);

	array_push($errors, "The post sent to the editor.");
  }
}


?>