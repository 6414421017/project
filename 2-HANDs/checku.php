<?php
    session_start();
    include_once 'db.php';

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "you must log in first";
        header('location: login.php');
    } 
   
?>