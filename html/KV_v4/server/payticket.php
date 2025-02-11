<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("localhost","root","","virunga");
$sql = "SELECT * FROM reservedtickets WHERE ticketid = '$_REQUEST[tid]'";

$query = mysqli_query($con, $sql)or die(mysqli_error());
if(mysqli_num_rows($query) >0){

    $sql1 = "SELECT * FROM reservedtickets WHERE ticketid = '$_REQUEST[tid]'";
    $query1 = mysqli_query($con, $sql1)or die(mysqli_error());
    $row = mysqli_fetch_array($query1);
    
    echo "<script>alert('Ticked $TID CONFIRMED!');window.location='../client/index.php';</script>";

} else {
    echo "<script>alert('Ticket not found! please use valid ID.');window.location='../client/index.php';</script>";
}
?>