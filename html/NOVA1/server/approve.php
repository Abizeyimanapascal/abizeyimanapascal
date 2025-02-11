<?php
$con = mysqli_connect("localhost","root","","db");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sql = "UPDATE `house` SET `status` = 'approved', `approvaldate` = now() WHERE `house_id` = '$_GET[id]'";
mysqli_query($con, $sql)or die(mysqli_error());
header('Location: ../client/Admin/waitinguploads.php');
?>