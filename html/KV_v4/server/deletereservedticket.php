<?php
$con = mysqli_connect("localhost","root","","virunga");
$query = mysqli_query($con,"DELETE FROM reservedtickets WHERE id = '$_GET[deletereservedticketid]'");
echo "<script>alert('Deleted');window.location='../client/Admin/index.php';</script>";
?>