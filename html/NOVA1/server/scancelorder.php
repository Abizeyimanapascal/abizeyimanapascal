<?php
session_start(); // Start the session
$con = mysqli_connect("localhost","root","","emarket");
if (!isset($_SESSION['username'])) {
    header('Location: ../server/userlogout.php'); // Redirect to login page if not logged in
    exit();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sql = "UPDATE `order` SET `orderstatus` = 'canceled' WHERE `oid` = '$_GET[id]'";
mysqli_query($con, $sql)or die(mysqli_error());
header('Location: ../client/receivedorders.php');
?>