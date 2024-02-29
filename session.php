<?php
include('includes/config.php');
session_start();
if(!isset($_SESSION['UID']))
{
  header("location:login.php");
}
$sql="SELECT `UID`, `Uname`, `Umail`, `Uphone`, `Uaddress`, `Upincode`, `Upassword` FROM `user_accounts` WHERE UID={$_SESSION["UID"]}";
$res=$con->query($sql);
if($res->num_rows>0)
{
  $row=$res->fetch_assoc();
}

?>