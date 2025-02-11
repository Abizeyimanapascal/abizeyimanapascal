<?php
session_start(); // Start the session
$con = new mysqli("localhost", "root", "", "emarket");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (!isset($_SESSION['username'])) {
    header('Location: ../server/userlogout.php'); // Redirect to login page if not logged in
    exit();
}

// Check if `id` and `pid` parameters are provided
if (!isset($_GET['id']) || !isset($_GET['pid'])) {
    die("Product ID or Cart ID not provided.");
}

// Fetch current product quantity
$stmt1 = $con->prepare("SELECT `productquantity` FROM `product` WHERE `pid` = ?");
if (!$stmt1) {
    die("Prepare failed for SELECT productquantity: " . $con->error);
}
$stmt1->bind_param("i", $_GET['pid']);
$stmt1->execute();
$result = $stmt1->get_result();
if (!$result || $result->num_rows == 0) {
    die("Product not found with pid: " . $_GET['pid']);
}
$row = $result->fetch_assoc();
$current_quantity = $row['productquantity'];

// Fetch cart quantity to add back to product quantity
$stmt3 = $con->prepare("SELECT `cartquantity` FROM `cart` WHERE `cid` = ?");
if (!$stmt3) {
    die("Prepare failed for SELECT cartquantity: " . $con->error);
}
$stmt3->bind_param("i", $_GET['id']);
$stmt3->execute();
$result3 = $stmt3->get_result();
if (!$result3 || $result3->num_rows == 0) {
    die("Cart item not found with cid: " . $_GET['id']);
}
$row3 = $result3->fetch_assoc();
$cart_quantity = $row3['cartquantity'];

// Calculate new product quantity
$newq = $current_quantity + $cart_quantity;

// Update product quantity in `product` table
$stmt2 = $con->prepare("UPDATE `product` SET `productquantity` = ? WHERE `pid` = ?");
if (!$stmt2) {
    die("Prepare failed for UPDATE productquantity: " . $con->error);
}
$stmt2->bind_param("ii", $newq, $_GET['pid']);
$stmt2->execute();
if ($stmt2->affected_rows <= 0) {
    die("Failed to update productquantity or no rows affected: " . $stmt2->error);
}

// Delete item from cart
$sql = "DELETE FROM `cart` WHERE `cid` = ?";
$stmt = $con->prepare($sql);
if (!$stmt) {
    die("Prepare failed for DELETE statement: " . $con->error);
}
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
if ($stmt->affected_rows <= 0) {
    die("Failed to delete from cart or no rows affected: " . $stmt->error);
}


// If everything is successful
echo "<script>alert('DELETED');</script>";
header('Location: ../client/mycart.php');
exit();

?>
