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



  	$sql = "SELECT * FROM users";
    $result = $db->query($sql);

                    $del = $_GET['id'];
                if($del){
                      $userdel = "DELETE FROM users WHERE id='$del'";
                         $t = $db->query($userdel);
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'admin/edit.php');
                    	
                }
$ad = $_GET['again'];
if(isset($_POST['change'])){
    $user = $_POST['name'];
    $pass = $_POST['pass'];
    $type = $_POST['type'];
    $place = $_POST['id2'];
        array_push($green, $ag);
        array_push($green, $body);
        array_push($green, $ename);
    $query = "UPDATE users SET username='$user', password='$pass', type='$type' WHERE id='$place'";
      	mysqli_query($db, $query);
    //$u = $db->query($userup);
    array_push($green, "The user has been changed.");
      header('Location: ../admin/edit.php');

}


?>