<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../Twilio/autoload.php';

use Twilio\Rest\Client;

$con = mysqli_connect("localhost","root","","virunga");
$ROUTE = $_POST['Route'];
$PRICE = $_POST['Price'];
$FIRSTNAME = $_POST['Firstname'];
$LASTNAME = $_POST['Lastname'];
$TRAVELDATE = $_POST['Traveldate'];
$TRAVELTIME = $_POST['Traveltime'];
$TI = $_POST['Ticketid'];
$TELEPHONENO = $_POST['phone'];


    $sql = "INSERT INTO `reservedtickets` (`id`, `route`, `passenger`, `ticketid`, `price`, `traveldate`, `traveltime`, `phone`)
     VALUES (
     NULL,
     '$ROUTE',
     '$FIRSTNAME  $LASTNAME',
     '$TI',
     '$PRICE',
     '$TRAVELDATE',
     '$TRAVELTIME',
     '$TELEPHONENO'
     )";

    if (mysqli_query($con, $sql)) {
 
echo "<script>alert('Confirm Payment on your phone!');window.location='../client/index.php';</script>";
    } else {
    echo "<script>alert('Something went wrong!');window.location='../client/index.php';</script>";
}    

?>