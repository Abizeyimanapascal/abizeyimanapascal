<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost","root","","virunga");
$sql = "SELECT * FROM `login` WHERE username = '$_REQUEST[username]' AND `password` = '$_REQUEST[password]'";
$query = mysqli_query($con, $sql)or die(mysqli_error());
if (mysqli_num_rows($query) >=1) {
    $_SESSION['username'] = $_REQUEST['username'];
    echo "<script>alert('Login success');window.location='../client/Admin/index.php';</script>";
    exit();
} else {
    echo "<script>alert('Login failed');window.location='../client/index.php';</script>";
}  
?>