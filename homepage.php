<?php
session_start();
$_SESSION['progress_proficiency'] = 0;
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
                    echo '<li class="nav-item"><a class="nav-link" href="profile.php">Profile </a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="includes/logout.inc.php"> Log out </a></li>';
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

        <br><br><br><br><br><br>        <br><br><br><br><br><br>
        <button class="button button1" onclick="window.location.href='new_words_menu.php'" ;>Novas Palavras</button>
        <br><br><br><br><br><br>
        <button class="button button2" onclick="window.location.href='review_menu.php'" ;>Revisão</button>



    </center>
</body>

</html>