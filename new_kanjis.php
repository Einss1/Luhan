<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();

if (empty($_GET)) {
    header('Location:new_kanjis_menu.php');
}

if ($_GET['level'] > returnUserLevel($conn)) {
    header('Location:new_kanjis_menu.php');
}

else {
    $x = $_GET['level'];
    $userLevel = returnUserLevel($conn);
    $sql="SELECT * FROM kanjis WHERE level = '".$x."'";
    $results = mysqli_query($conn,$sql);
    
    $kanji = array();
    $meaning = array();
    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $kanji[] = $row['kanji'];
            $meaning[] = $row['meaning'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1</title>
    <link href="css/styles.css" rel="stylesheet" />
    <style><?php include 'CSS/levels.css'; ?></style>
</head>

<body>
    
</body>
    <center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">Lumorah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
            if(isset($_SESSION["useruid"])) {
                echo '<li class="nav-item"><a class="nav-link" href="homepage.php">Homepage</a></li>';
                echo '<li class="nav-item"><a class="nav-link" href="new_kanjis.php"> New Kanjis</a></li>';
            }else {
                header("location: ../luhan/login.php");
            }
        ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <img src="https://dummyimage.com/600x300/343a40/6c757d" id="icon"> <br><br>
        
        <div class="newkanjis">
            <div class="slideshow-container">
                <div class="mySlides">
                    <p class="kan">Kanji</p> 
                    <p class="kanji1"><?php print_r($kanji[0])?></p> 
                    <!--<p class="kata">Katakana</p>
                    <p class="katakana">いち</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">ichi</p>-->
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[0])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji2"><?php print_r($kanji[1])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[1])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji3"><?php print_r($kanji[2])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[2])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji4"><?php print_r($kanji[3])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[3])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji5"><?php print_r($kanji[4])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[4])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji6"><?php print_r($kanji[5])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[5])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji7"><?php print_r($kanji[6])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[6])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji8"><?php print_r($kanji[7])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[7])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji9"><?php print_r($kanji[8])?></p> 
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[8])?></p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji10"><?php print_r($kanji[9])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[9])?></p>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
        </div>

        <?php
            if (returnUserLevel($conn) <= $x) {
            ?><form action="includes/levels.inc.php" method="post">
                <button type="submit" name="submit">Complete level</button>
            </form>
        <?php
            }
        ?>
        <script src="JavaScript/slides-new-kanjis.js"></script>
    </center>
</html>