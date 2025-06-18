<?php
session_start(); // Start the session
$con = new mysqli("localhost", "root", "", "emarket");
$sql = "DELETE FROM `cart` WHERE `username` = ?";
$stmt = $con->prepare($sql);
if (!$stmt) {
    die("Prepare failed for DELETE statement: " . $con->error);
}
$stmt->bind_param("s", $_GET['user']);
$stmt->execute();
$sql1 = "INSERT INTO `order` (`pid`, `username`, `owner`, `orderquantity`) 
SELECT `pid`, `username`, `owner`, `cartquantity` FROM `cart` WHERE `username` = ?";
$stmt1 = $con->prepare($sql1);
if (!$stmt1) {
    die("Prepare failed for INSERT statement: " . $con->error);
}
$stmt1->bind_param("s", $_GET['user']);
$stmt1->execute();
if ($stmt1->affected_rows <= 0) {
    die("Failed to update order table: " . $stmt1->error);
}

?>