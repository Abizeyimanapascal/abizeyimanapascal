<?php
$con = mysqli_connect("localhost","root","","virunga");
$query = mysqli_query($con,"DELETE FROM confirmedtickets WHERE id = $_GET[deleteconfirmedticketid]");
echo "<script>alert('Deleted');window.location='../client/Admin/index.php';</script>";
?>