<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS\index.css">
</head>

<body>
    <center>

        <img src="./Images/logo.png" id="icon"> <br><br>
        <section class="signup-form">
            <form action="includes/login.inc.php" method="post">
                <label for="email">Email</label><br>
                <input type="text" placeholder="Username/Email" name="uid" required><br><br>

                <label for="psw">Password</label><br>
                <input type="password" placeholder="Password" name="pwd" required><br><br>

                <button type="submit" name="submit">Log In</button>
                <input type="checkbox" name="remember">Remember me <br><br>
            </form>

            <?php
            if(isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information!</p>";
                }
            }
        ?>
        </section>

        <a href="signup.php" style="font-family: Arial;">Create an account</a><br>
        <a href="passrecovery.html" style="font-family: Arial;">Recover password</a>
        <br><br>
        <a href="homepage.html">STILL DEVELOPING</a>

    </center>

</body>

</html>