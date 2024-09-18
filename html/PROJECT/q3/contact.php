<?php
$con = mysqli_connect("localhost","root","","customer");
try{
if (isset($_POST['send'])) {
    $a = $_POST['fullname'];
    $b = $_POST['email'];
    $c = $_POST['phone'];
    $d = $_POST['location'];
    $e = $_POST['message'];
    
    $sql = "INSERT INTO `customer_contacts`(`fullname`, `email`, `phone`, `location`, `message`) VALUES ('$a','$b','$c','$d','$e')";

    if (mysqli_query($con,$sql)) {
        echo"<script>alert('MESSAGE RECEIVED');window.location='contact.php';</script>";
    } else {
        echo"<script>alert('MESSAGE NOT RECEIVED!');window.location='contact.php';</script>";
    }
}
} catch(Exception $e){
    echo $e;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header">
            Contact us
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                
            </ul>
        </nav>
    </header>

    <main>
    <h1>Contact Us</h1>
    <p>Have a question or feedback? Fill out the form below to get in touch with us.</p>
    <form action="contact.php" method="POST">
    <center>
        <table cellspacing="10">
            <tr>
                <td>
                <label for="name">Name:</label>
                </td>
                <td>
                <input type="text" name="fullname" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="email">Email:</label>
                </td>
                <td>
                <input type="email" name="email" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="phone">Phone:</label>
                </td>
                <td>
                <input type="text" name="phone" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="Address">Location:</label>
                </td>
                <td>
                <input type="text" name="location" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="date">message:</label>
                </td>
                <td>
                <textarea name="message">

                </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="submit" name="send" value="SEND">
                </td>
            </tr>
        </table>
        </center>
    </form>
</main>

    
    <footer>
        &copy; All right reserved
    </footer>
</body>
</html>
