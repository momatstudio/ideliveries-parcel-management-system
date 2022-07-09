<?php 
    if (!isset($_SESSION['username'])) {
        $_SESSION['message'] = "You must log in first";
        header('location: signin.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: signin.php?loggedout=1");
    }
?>