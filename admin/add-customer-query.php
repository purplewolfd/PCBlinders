<?php

    include '../includes/config.php';

    if(isset($_POST['add_query'])){
        $cname = $_POST['customer_name'];
        $cmail = $_POST['customer_mail'];
        $cquery = $_POST['customer_query'];

        $query = "INSERT INTO `user_query`(`customer_name`, `customer_mail`, `customer_query`) VALUES ('$cname','$cmail','$cquery')";

        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed");
        }
        else{
                header('location:../index.php?message=Thanks for considering PCPulse.We well mail you shortly');
        }
    }

?>