<?php
$con = mysqli_connect("localhost","root","","customer");
try{
if (isset($_POST['send'])) {
    $a = $_POST['fullname'];
    $b = $_POST['email'];
    $c = $_POST['phone'];
    $d = $_POST['item'];
    $e = $_POST['address'];
    $f = $_POST['date'];
    
    $sql = "INSERT INTO `customer_order`(`fullname`, `email`, `phone`, `menu`, `address`, `date`) VALUES ('$a','$b','$c','$d','$e','$f')";

    if (mysqli_query($con,$sql)) {
        echo"<script>alert('ORDER RECEIVED');window.location='order.php';</script>";
    } else {
        echo"<script>alert('ORDER NOT RECEIVED!');window.location='order.php';</script>";
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
            Make order
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
    <h1>Order ITEM</h1><br>
    <form action="order.php" method="POST">
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
                <input type="number" name="phone" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="item">Select Item:</label>
                </td>
                <td>
                <select name="item">
                    <option value="Grilled Salmon">Grilled Salmon</option>
                    <option value="Classic Mojito">Classic Mojito</option>
                    <option value="Orange Delight">Orange Delight</option>
                    <!-- Add more options as needed -->
                </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for="Address">Address:</label>
                </td>
                <td>
                <input type="text" name="address" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="date">Date:</label>
                </td>
                <td>
                <input type="date" name="date" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="submit" name="send" value="Place Order">
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
