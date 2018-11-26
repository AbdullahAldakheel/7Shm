<?php
session_start();
// initializing variables
$username = "";
$errors = array(); 

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

$make = $_GET['id'];
if($make){
    $userdel = "DELETE FROM post WHERE postid=$make";
    $t = $db->query($userdel);
    array_push($green, "The post has been deleted.");

}
             
    


?>