<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost","root","","db");
$query = mysqli_query($con,"INSERT INTO `comment` VALUES (NULL,'$_POST[Commentername]','$_POST[Commenteremail]','$_POST[Commenterphone]','$_POST[Comment]')")OR die(mysqli_error());
if($query){
    echo "echo <script>alert('Message Received');window.location='../client/index.php';</script>";
} else {
    echo "err";
}

?>