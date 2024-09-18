<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = new mysqli("localhost", "root", "", "emarket");
if($con->connect_error){
    die("Connection Failed: " . $con->connect_error);
}
$sql = "DELETE FROM `product` WHERE `pid` = ?";

$stmt = $con->prepare($sql);

$stmt->bind_param("i", $_GET['id']);

$stmt->execute();
header('Location: ../client/Admin/products.php');
?>