<?php
    session_start();

    if(empty($_SESSION['id'])){
        header('location:login.php');
        exit();
    }

?>