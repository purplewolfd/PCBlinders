<?php 
include('./includes/config.php');
include('./includes/header.php'); 

if(isset($_GET['PID'])){
    $PID = $_GET['PID'];
    $UID = $_GET['UID'];
}

        $Pquery = "SELECT * from products where PID='$PID'";
                                                
        $Presult =  mysqli_query($conn,$Pquery);

        $Prow = mysqli_fetch_assoc($Presult);
        echo $Prow['p_name'];

        $sql= "INSERT INTO `cart`(`PID`, `UID`, `PPRICE`) VALUES ('$Prow[PID]','$UID','$Prow[p_price]')";
        $result=$conn->query($sql);

        if($result) {
            // If insertion is successful, redirect back to the previous page
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            // Handle the case where insertion failed
            echo "Failed to add product to cart.";
        }

?>