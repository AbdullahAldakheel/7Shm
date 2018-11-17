<?php 
$name = $_POST["user"];
$pass = $_POST["pass"];


if ($name == "Ahmed" && $pass == 123){
    header('Location: ../index.php');
}else{
     header('Location: ../login.php');
    
}


?>