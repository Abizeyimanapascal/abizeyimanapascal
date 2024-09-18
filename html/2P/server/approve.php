<?php
$con = mysqli_connect("localhost","root","","emarket");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sql = "UPDATE `product` SET `status` = 'approved' WHERE `pid` = '$_GET[id]'";
mysqli_query($con, $sql)or die(mysqli_error());
header('Location: ../client/Admin/approveproduct.php');
?>