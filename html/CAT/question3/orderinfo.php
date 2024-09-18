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
            EXTERIAL HOTEL
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 style = "margin-left: 20%; width:60%;">order information</h1><br>
        
<table style="margin-left: 25%;" width="50%">
    <tr style="background: rgba(39, 72, 102, .95);color:white;">
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Item</th>
        <th>Address</th>
        <th>Date</th>
    </tr>

    <?php
    $con = mysqli_connect("localhost", "root", "", "hotel");
    $sql = mysqli_query($con, "SELECT * FROM `order`");

    // Check if there are rows returned
    if (mysqli_num_rows($sql) > 0) {
        // Loop through each row
        while ($row = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['item'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
    </table>
    </main>

    <footer>
        &copy; All right reserved by Exterial Hotel 2024
    </footer>
</body>
</html>
