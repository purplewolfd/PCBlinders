<?php 
include('includes/config.php');
session_start();

if (isset($_POST["submit"])) {
    $Uname = $_POST["Uname"];
    $Umail = $_POST["Umail"];
    $Uphone = $_POST["Uphone"];
    $Uaddress = $_POST["Uaddress"];
    $Upincode = $_POST["Upincode"];
    $Upassword = $_POST["Upassword"];

    // Check if the email already exists in the database
    $checkQuery = "SELECT `Umail` FROM `user_accounts` WHERE `Umail` = '$Umail'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows == 0) {
        // Email does not exist, proceed with the insertion
        $insertQuery = "INSERT INTO `user_accounts`(`Uname`, `Umail`, `Uphone`, `Uaddress`, `Upincode`, `Upassword`) VALUES ('$Uname','$Umail','$Uphone','$Uaddress','$Upincode','$Upassword')";

        $result = $conn->query($insertQuery);

        if ($result) {
            header("location: login.php?message=Account Created. Login now");
            exit();
        } else {
            // Error in insertion, display the error
            echo mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Mail ID already exist');";
  }
}
?>