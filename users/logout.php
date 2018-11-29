<?php

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'index.php');
}
?>