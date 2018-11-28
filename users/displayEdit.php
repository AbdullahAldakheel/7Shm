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
$comm = "Nothing";
$sql = "SELECT * FROM post WHERE approve='$approve' AND comment='$comm'";
$result = $db->query($sql);


if(isset($_POST['reject'])){
    $ename = $_SESSION['username'];
    $ag = $_POST['here'];
//        echo "<script language='javascript' type='text/javascript'>";
//        $com = "document.getElementById('$again').innerHTML;";
//        echo "</script>";
     $body = $_POST['com'];
        array_push($green, $ag);
        array_push($green, $body);
        array_push($green, $ename);
    $query = "UPDATE post SET comment='$body', ename='$ename' WHERE postid='$ag'";
      	mysqli_query($db, $query);
    //$u = $db->query($userup);
    array_push($green, "The comment has been sent.");

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