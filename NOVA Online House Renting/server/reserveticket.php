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
$TELEPHONENO = $_POST['Telephoneno'];
if ($TELEPHONENO == '0786289291') {


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
        
// Twilio credentials from your Twilio Console
$sid = 'ACc8914952e73a635a2331b8b7a285fd2f'; // Replace with your Twilio Account SID
$token = 'e8b2debe76341a76dbde2bc1db2d5ffc'; // Replace with your Twilio Auth Token
$twilio_number = '+16263250018'; // Replace with your Twilio phone number

// Create a Twilio client
$client = new Client($sid, $token);

// Send an SMS
    $message = $client->messages->create(
        '+25'.$TELEPHONENO, // Replace with the recipient's phone number
        [
            'from' => $twilio_number,
            'body' => 'Ticket: '.$TI.' has been successfully reseved! use this ID: '. $TI .' in payment to confirm it.'
        ]
    );
echo "<script>alert('Ticked reserved!');window.location='../client/index.php';</script>";
    } else {
        echo "<script>alert('Something went wrong!');window.location='../client/index.php';</script>";
    }
    # code...
} else {
    echo "<script>alert('Invalid phone number !');window.location='../client/index.php';</script>";
}    

?>