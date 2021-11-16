<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style><?php include 'CSS\index.css'?></style>
</head>

<body>
    <center>

    <img src="./Images/logo.png" id="icon"> <br><br>

    <section class="signup-form">
        <div>
            <form action="includes/signup.inc.php" method="post">
                <label for="name">Full name</label><br>
                <input name="name" type="text" style="text-align:center" placeholder="Full name" ><br><br>

                <label for="email">Email</label><br>
                <input name="email" type="text" style="text-align:center" placeholder="Email" ><br><br>

                <label for="uid">Username</label><br>
                <input name="uid" type="text" style="text-align:center" placeholder="Username" ><br><br>

                <label for="pwd">Password</label><br>
                <input name="pwd" type="password" style="text-align:center" placeholder="Password" ><br><br>

                <label>Re-type password</label><br>
                <input name="pwdrepeat" type="password" style="text-align:center" placeholder="Re-type password" ><br><br>

                <input type="checkbox" id="terms" required>
                <a>Agree with the </a><a href="terms.html" target="_blank">terms</a><br><br>

                <button type="submit" name="submit">Sign up</button>
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
                else if ($_GET["error"] == "weakPassword") {
                    echo "<p>Password should be at least 8 characters in length and should include at least one upper case letter , one number and one special character!</p>";
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