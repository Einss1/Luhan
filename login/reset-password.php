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
        <style><?php include '../CSS/index.css'?></style>
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
                            <li class="nav-item"><a class="nav-link" href="../login/signup.php">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br><br><br>
    <center>

        <img src="https://dummyimage.com/700x400/343a40/6c757d" id="icon"> <br><br>
        
        <h1 style="font-size:16px;">Enter your email address and an email will be sent <br> to you with information on how to <br> update your password. </h1>
        <form action="includes/reset-request.inc.php" method="post">
            <label for="email">Email</label><br>
            <input name="email" type="text" style="text-align:center" placeholder="Enter your email address" required><br><br>

            <button type="submit" name="reset-request-submit">Submit</button>
        </form>
        <?php
            if(isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo "<p>Check your e-mail!</p>";
                }
            }
        ?>
        <br><br>
        <a href="login.php" style="font-family: Arial;">Back to login</a><br>

    </center>
    </body>
</html>