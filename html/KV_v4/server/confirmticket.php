<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $con = mysqli_connect("localhost","root","","virunga");
    $sql = "SELECT * FROM reservedtickets WHERE id = '$_GET[confirmticketid]'";
    $query = mysqli_query($con, $sql)or die(mysqli_error());
    $row = mysqli_fetch_array($query);
    $sql1 = "INSERT INTO `confirmedtickets` (`id`, `route`, `passenger`, `ticketid`, `price`, `traveldate`, `traveltime`, `phone`)
     VALUES (
     NULL,
     '$row[route]',
     '$row[passenger]',
     '$row[ticketid]',
     '$row[price]',
     '$row[traveldate]',
     '$row[traveltime]',
     '$row[phone]'
     )";
     mysqli_query($con, $sql1);
     mysqli_query($con, "DELETE FROM reservedtickets WHERE id = '$_GET[confirmticketid]'");
     echo "<script>alert('Confirmed');window.location='../client/Admin/index.php';</script>";

    
?>