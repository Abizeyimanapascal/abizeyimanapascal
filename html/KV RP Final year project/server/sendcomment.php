<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost","root","","virunga");
$query = mysqli_query($con,"INSERT INTO comments VALUES (NULL,'$_POST[commentername]','$_POST[comment]')")OR die(mysqli_error());
if($query){
    echo "echo <script>alert('sent');window.location='../client/index.php';</script>";
} else {
    echo "err";
}

?>