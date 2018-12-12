<?php

include('connect.php');


$approve = "Yes";
$sql = "SELECT * FROM post WHERE approve='$approve' ORDER BY postid DESC";
$result = $db->query($sql);






?>