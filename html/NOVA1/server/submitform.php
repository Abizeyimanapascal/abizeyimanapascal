<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
                            
$con = mysqli_connect("localhost","root","","db");
$CLIENTNAME = $_POST['Clientname'];
$CLIENTEMAIL = $_POST['Clientemail'];
$CLIENTPHONE = $_POST['Clientphone'];
$CLIENTLOCATION = $_POST['Clientlocation'];
                            
$sql = "INSERT INTO `order` (`house_id`, `client_name`, `client_email`, `client_phone`, `client_location`)
        VALUES (
        '$_GET[house_id]',
        '$CLIENTNAME',
        '$CLIENTEMAIL',
        '$CLIENTPHONE',
        '$CLIENTLOCATION'
        )";
                            
        if (mysqli_query($con, $sql)) {
            echo "<script>
            alert('Thank you for your Interest! Wait for our Contact');
            window.location='../client/index.php?search';
            </script>";
        }

?>