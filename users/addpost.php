<?php
session_start();
$title = "";
$errors = array();
$green = array();
include('connect.php');


if (isset($_POST['post'])) {


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

        $com = "Waiting for review";
        $query = "INSERT INTO post (title, body, img, jname, comment, approve, date) 
  			  VALUES(' $title', '$body', '$image', '$jname','$com', '$approve','$date')";
        mysqli_query($db, $query);

        array_push($green, "The post sent to the editor.");
    }
}


?>