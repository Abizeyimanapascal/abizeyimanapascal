<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = new mysqli("localhost", "root", "", "db");
if($con->connect_error){
    die("Connection Failed: " . $con->connect_error);
}
$sql = "DELETE FROM `house` WHERE `house_id` = ?";

$stmt = $con->prepare($sql);

$stmt->bind_param("i", $_GET['id']);

$stmt->execute();
header('Location: ../client/admin/waitinguploads.php');
?>