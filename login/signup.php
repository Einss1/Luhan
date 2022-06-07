<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Lumorah</title>
        <link rel="icon" type="image/x-icon" href="Images/monkeylogo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">Lumorah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    <center>
        <br><br><br>
    <div class="main">
        <div class="icon">
            <img src="https://dummyimage.com/500x250/343a40/6c757d" id="icon"> <br><br>
        </div>

        <section class="signup-form">
            <div>
                <form action="../includes/signup.inc.php" method="post" autocomplete="off">
                    <label for="name">Full name</label><br>
                    <input name="name" type="text" style="text-align:center" placeholder="Full name" ><br><br>

                    <label for="email" >Email</label><br>
                    <input name="email" type="text" style="text-align:center" placeholder="Email" ><br><br>

                    <label for="uid">Username</label><br>
                    <input name="uid" type="text" style="text-align:center" placeholder="Username" autocomplete="off"><br><br>

                    <label for="pwd">Password</label><br>
                    <input name="pwd" type="password" style="text-align:center" placeholder="Password" autocomplete="off"><br><br>

                    <label>Re-type password</label><br>
                    <input name="pwdrepeat" type="password" style="text-align:center" placeholder="Re-type password" autocomplete="off"><br><br>

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
                        echo "<p>Passwords don't match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken") {
                        echo "<p>Username already taken!</p>";
                    }
                    else if ($_GET["error"] == "emailtaken") {
                        echo "<p>Email already taken!</p>";
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
        <a href="index.php" style="font-family: Arial;">Click here</a><br>
    </div>
    </center>
</body>

</html>