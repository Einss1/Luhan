<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <style><?php include 'CSS/levels.css'; ?></style>
</head>

<body>
    
</body>
    <center>
        <img src="Images/logo2.png" id="icon"> <br><br>

        <?php 
            if(isset($_SESSION["useruid"])) {
                echo "<li><a href='homepage.php'>Homepage</a></li>";
                echo "<li><a href='newkanjis.php'> New Kanjis</a></li>";
            }else {
                header("location: login.php");
            }
        ?>
        
        <br><br><br><br>

        <?php
            $id = idloop();
            if(isset($_GET["success"])) {
                $id = idloop();
                if ($_GET["success"] == "rightAnswer") {
                    echo "<p>Right Answer!</p>";
                } 
            }
            if(isset($_GET["error"])) {
                if ($_GET["error"] == "wrongAnswer") {
                    echo "<p>Wrong Answer!</p>";
                } 
            }
        ?>

        <div>
        <p><?php echoKanji($conn, $id);
            $_SESSION['id'] = $id;
        ?></p>
            
            <form action="includes/review.inc.php" method="post">
                <label for="meaning">Meaning</label><br>
                <input name="meaning" type="text" style="text-align:center" placeholder="meaning" ><br><br>
                <button type="submit" name="submit">submit</button>
            </form>
        </div>
        
    
    </center>
</html>