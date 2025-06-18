<?php
session_start(); // Start the session
$con = new mysqli("localhost", "root", "", "emarket");
if (!isset($_SESSION['username'])) {
    header('Location: ../server/userlogout.php'); // Redirect to login page if not logged in
    exit();
}
    
    $sql = "INSERT INTO `order` (`pid`, `username`, `owner`, `orderquantity`)
    SELECT `pid`, `username`, `owner`, `cartquantity`
    FROM cart
    WHERE `username` = ?";
    $sql1 = "DELETE FROM `cart` WHERE `username` = ?";
    $stmt = $con->prepare($sql);
    $stmt1 = $con->prepare($sql1);
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt1->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $stmt1->execute();
    echo"<script>alert('CONFIRMED')</script>";
    header('Location: ../client/account.php?search');
?>    