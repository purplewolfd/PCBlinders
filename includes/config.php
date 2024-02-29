<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcpulse_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
}

?> 