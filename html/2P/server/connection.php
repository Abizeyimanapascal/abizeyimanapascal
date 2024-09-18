<?php
$con = mysqli_connect("localhost","root","","virunga");
$query = mysqli_query($con,"SELECT * FROM reservedtickets");
$numberofreservedtickets = mysqli_num_rows($query);
?>