<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login - Lumorah</title>
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
                            <li class="nav-item"><a class="nav-link" href="signup.php">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    
    <center>
        <br><br><br>
        <img src="https://dummyimage.com/500x250/343a40/6c757d" id="icon"> <br><br>

        <section class="signup-form">
            <form action="../includes/login.inc.php" method="post" autocomplete="off">
                <label for="email">Email / Username</label><br>
                <input type="text" style="text-align:center" placeholder="Email / Username" name="uid" required><br><br>

                <label for="psw">Password</label><br>
                <input type="password" style="text-align:center" placeholder="Password" name="pwd" required><br><br>

                <button type="submit" name="submit">Log In</button>
                <br><br>
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

    <?php
        if(isset($_GET['success'])){
            if($_GET['success'] == 'profileUpdated') {
                ?>
                 <small class="alert alert-success">Profile updated!</small>
                <br>
            <?php   
            }
            if($_GET['success'] == 'accountDeleted') {
                ?>
                 <small class="alert alert-success">Account Deleted</small>
                <br>
            <?php   
            }
        }
    ?>
    
        </section>

        <a href="signup.php" style="font-family: Arial;">Create an account</a><br>
        <a href="reset-password.php" style="font-family: Arial;">Forgot your password?</a>
        <br><br>
        <?php
            if(isset($_GET["newpwd"])) {
                if ($_GET["newpwd"] == "passwordupdated") {
                    echo "<p>Your password has been reset!</p>";
                }
            }
        ?>

    </center>
        </main>
</body>

</html>