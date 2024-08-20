<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$PHONENUMBER ='+25' . $_POST['phonenumber'];
$TID = $_POST['tid'];
require '../Twilio/autoload.php';

use Twilio\Rest\Client;

$con = mysqli_connect("localhost","root","","virunga");
$sql = "SELECT * FROM reservedtickets WHERE ticketid = '$_REQUEST[tid]'";

$query = mysqli_query($con, $sql)or die(mysqli_error());
if(mysqli_num_rows($query) >0){

    $sql1 = "SELECT * FROM reservedtickets WHERE ticketid = '$_REQUEST[tid]'";
    $query1 = mysqli_query($con, $sql1)or die(mysqli_error());
    $row = mysqli_fetch_array($query1);
    
// Twilio credentials from your Twilio Console
$sid = 'ACc8914952e73a635a2331b8b7a285fd2f'; // Replace with your Twilio Account SID
$token = 'e8b2debe76341a76dbde2bc1db2d5ffc'; // Replace with your Twilio Auth Token
$twilio_number = '+16263250018'; // Replace with your Twilio phone number

// Create a Twilio client
$client = new Client($sid, $token);

// Send an SMS
try {
    $message = $client->messages->create(
        $PHONENUMBER, // Replace with the recipient's phone number
        [
            'from' => $twilio_number,
            'body' => 'Dear ' . $row['passenger'] .', Your ticket: ' .$TID. ', from ' . $row['route'] . ', has been successfully confirmed! Amount: ' . $row['price'] . ' RWF. it is scheduled on: ' . $row['traveldate'] . ' at: ' . $row['traveltime'] . ' see you then!'
        ]
    );
    echo "<script>alert('Ticked $TID CONFIRMED!');window.location='../client/index.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Error: check the phone number and try again!');window.location='../client/index.php';</script>";
}
} else {
    echo "<script>alert('Ticket not found! please use valid ID.');window.location='../client/index.php';</script>";
}
?>