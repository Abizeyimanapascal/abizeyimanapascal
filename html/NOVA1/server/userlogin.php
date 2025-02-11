<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost","root","","emarket");
$sql = "SELECT * FROM `user` WHERE username = '$_REQUEST[Username]' AND `password` = '$_REQUEST[Password]'";
$query = mysqli_query($con, $sql)or die(mysqli_error());
if (mysqli_num_rows($query) >=1) {
    $_SESSION['username'] = $_REQUEST['Username'];
    echo "<script>alert('Login success');window.location='../client/account.php';</script>";
    exit();
} else {
    echo "<script>alert('Login failed');window.location='../client/userlogout.php';</script>";
}  
?>
