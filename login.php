<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luhan</title>
    <style><?php include 'CSS\index.css'?></style>
</head>

<body>
    <center>

        <img src="./Images/logo.png" id="icon"> <br><br>

        <section class="signup-form">
            <form action="includes/login.inc.php" method="post">
                <label for="email">Email / Username</label><br>
                <input type="text" style="text-align:center" placeholder="Email / Username" name="uid" required><br><br>

                <label for="psw">Password</label><br>
                <input type="password" style="text-align:center" placeholder="Password" name="pwd" required><br><br>

                <button type="submit" name="submit">Log In</button>
                <br><br>
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

</body>

</html>