<?php 
    include('./includes/config.php');
    session_start();

    if(!isset($_SESSION['UID'])){
        header('location: login.php?message=Please login first to use this service');
    }
    else{
        include_once('sell-product-page.php');
    }
?>