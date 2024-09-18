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
                <li><a href="index.php">Back to home</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <form action="orderinfo.php" method="POST">
            <center>
                <br>
                <h3>Fill your credentials here to view the order informations</h3>
                <br>
            <table cellspacing="20">
                <tr>
                    <td><label for="fullname">User Name:</label></td>
                    <td><input type="text" id="name" name="fullname" required></td>
                </tr>
                <tr>
                    <td><label for="email">Password</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td>
                    <a href="index.php" type="button" style="width: 100%; padding: 10px;background: rgb(196 34 34 / 95%); color: white; border: none;">Back</a>
                    </td>
                    <td>
                        <input type="submit" name="login" value="LOGIN" style="width: 100%; padding: 10px;background: rgba(39, 72, 102, .95); color: white; border: none;">
                    </
                    <td>
                </tr>
</table>
</center>
</form>
    </main>

    <footer>
        &copy; All right reserved by Exterial Hotel 2024
    </footer>
</body>
</html>
