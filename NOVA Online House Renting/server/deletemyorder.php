<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = new mysqli("localhost", "root", "", "emarket");
if($con->connect_error){
    die("Connection Failed: " . $con->connect_error);
}
$sql = "DELETE FROM `order` WHERE `oid` = ?";
$stmt = $con->prepare($sql);
if ($stmt === false) {
    die("Error preparing the statement: " . $con->error);
}
$stmt->bind_param("i", $_GET['id']);

if ($stmt->execute()) {
    echo "<script>
            alert('DELETED');
            window.location.href = '../client/myorders.php';
          </script>";
} else {
    echo "<script>
            alert('FAILED');
            window.location.href = '../client/myorders.php';
          </script>";
}

// Close the statement and connection
$stmt->close();
$con->close();
?>