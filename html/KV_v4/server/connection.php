<?php
$con = mysqli_connect("localhost","root","","virunga");
$query = mysqli_query($con,"SELECT * FROM reservedtickets WHERE `route` LIKE '$busstation%'");
$numberofreservedtickets = mysqli_num_rows($query);
?>