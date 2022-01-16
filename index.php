<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fun and easy way to learn!">
    <title>Luhan</title>
    <style><?php include 'CSS/index.css'; ?></style>
</head>

<body>
    <header class="header">
        <img class="header-image" src="Images/monkeylogo.jpeg" alt="Luhan logo">
        <nav class="header-menu">
            <a class="header-menu-item" href="login.php">Login</a>
            <a class="header-menu-item" href="signup.php">Register</a>
        </nav>
    </header>

    <main class="content"> 
        <section class="content-main">
            <div class="content-main-info">
                <h1 class="content-main-info-title">Luhan</h1>
                <h2 class="content-main-info-subtitle">A fun and easy way to learn Japanese!</h2>
                <button class="content-main-info-button" onclick="window.location.href='signup.php'">Join Us!</button>
            </div>
            <img class="content-main-image" src="Images/logo-2.png" alt="Logo">
        </section>

        <section class="content-secondary">
            <h3 class="content-secondary-title">Our objectives</h3>
            <p class="content-secondary-paragraph">Free!</p>
            <p class="content-secondary-paragraph">Easy to use!</p>
            <p class="content-secondary-paragraph">Fun!</p>
        </section>
    </main>

    <footer class="footer">
        <img class="footer-image" src="Images/logo2.png" alt="Luhan">
    </footer>
</body>

</html>