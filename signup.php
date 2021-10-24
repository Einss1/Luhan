<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS\index.css">
</head>

<body>
    <center>

    <img src="./Images/logo.png" id="icon"> <br><br>
    <section class="signup-form">

        <div>
            <form action="includes/signup.inc.php" method="post">
                <label for="name">Name</label><br>
                <input name="name" type="text" placeholder="Full Name" ><br><br>

                <label for="email">Email</label><br>
                <input name="email" type="text" placeholder="Email" ><br><br>

                <label for="uid">User ID</label><br>
                <input name="uid" type="text" placeholder="User ID" ><br><br>

                <label for="pwd">Password</label><br>
                <input name="pwd" type="password" placeholder="Password" ><br><br>

                <label>Re-type password</label><br>
                <input name="pwdrepeat" type="password" placeholder="Re-type password" ><br><br>

                <input type="checkbox" id="terms" required>
                <a>Agree with the </a><a href="terms.html" target="_blank">terms</a><br><br>

                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>

        <?php
            if(isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose a proper username!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email!</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords doesn't match!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again!</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already taken!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>

    </section>


        <br>
        <a style="font-family: Arial;">Already have an account? </a>
        <a href="login.php" style="font-family: Arial;">Click here</a><br>

    </center>
</body>

</html>