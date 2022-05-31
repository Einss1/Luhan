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
        <link href="css/styles.css" rel="stylesheet" />
        <style><?php include 'CSS\homepage.css'?></style>
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
                        <?php 
                if(isset($_SESSION["useruid"])) {
                    echo "<li><a href='progress.html'>Progress </a></li>";
                    echo "<li><a href='profile.php'>Profile </a></li>";
                    echo "<li><a href='includes/logout.inc.php'> Log out </a></li>";
                }
                else {
                    header("location: ../luhan/login.php");
                }
            ?>
                        </ul>
                    </div>
                </div>
            </nav>
    <center>
        <img src="./Images/logo2.png" id="icon"> <br><br>
        <br><br>

        <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>New Kanjis
            <p id="date"></p>
            <script>
                var d = new Date();
                var date = d.getDate();
                var year = d.getFullYear();
                var month = d.getMonth();
                var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                month = monthArr[month];
                document.getElementById("date").innerHTML = date + ", " + month + ", " + year;
            </script>
        </button>
        <br><br>
        <button class="button button2" onclick="window.location.href='review.php'" ;>Review</button>
        <br><br>
        <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>Practice</button>



    </center>
</body>

</html>