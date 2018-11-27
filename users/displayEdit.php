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
$comm = "";
$sql = "SELECT * FROM post WHERE approve='$approve' AND comment='$comm'";
$result = $db->query($sql);

$again = $_GET['again'];
if(isset($_POST['reject'])){
    $ename = $_SESSION['username'];
    $comment = mysqli_real_escape_string($db, $_POST['field']);

    $userdel = "UPDATE post SET comment='$comment', ename='$ename' WHERE postid='$again'";
    $t = $db->query($userdel);
    array_push($green, "The post has been reviewed.");

}else{
    
    $make = $_GET['app'];
if($make){
    $approve = "Yes";
    $ename = $_SESSION['username'];
    $userdel = "UPDATE post SET approve='$approve', ename='$ename' WHERE postid='$make'";
    $t = $db->query($userdel);
    array_push($green, "The post has been published.");

}
}






?>