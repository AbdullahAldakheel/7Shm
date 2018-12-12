<?php
session_start();
$username = "";
$errors = array();
$green = array();


include('connect.php');


$approve = "No";
$comm = "Waiting for review";
$sql = "SELECT * FROM post WHERE approve='$approve' AND comment='$comm' ORDER BY postid ASC";
$result = $db->query($sql);


if(isset($_POST['reject'])){
    $ename = $_SESSION['username'];
    $ag = $_POST['here'];
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