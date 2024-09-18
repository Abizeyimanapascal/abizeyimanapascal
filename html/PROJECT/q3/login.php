<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <style>
       body{
    text-align: center;
}
/* Reset default browser styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Basic styles for header and nav */
header nav{
    background-color: #026644c4;
    color: #fff;
    padding: 10px;
    border: 1px solid white;
}
.header{
    background-color: #333;
    padding: 30px;
    color: white;
}
nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    padding: 5px;
    border-radius: 3px;
    text-decoration: none;
}
nav ul li a:hover {
    color: #026644c4;
    background-color: white;
    text-decoration: none;
}

/* Basic styles for main content */
main {
    padding: 20px;
}
img{
    width: 30%;
}

/* Basic styles for footer */
footer {
    background-color: gray;
    color: #fff;
    text-align: center;
    padding: 10px;
}

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Back</a></li>
            </ul>
        </nav>
    </header>
    <main style="margin-top:5%;">
        <h1>Login here to view order information</h1><br><br>

        <form action="info.php" method="POST">
            <center>
            <table cellspacing="20">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="" value="LOGIN" style="padding:5%;background:#026644c4;border:none;color:white;"></td>
                </tr>
            </table>
            </center>
        </form>
    
    </main>
    <footer>
        <!-- Footer content goes here -->
        &copy; All right reserved

    </footer>
</body>
</html>
