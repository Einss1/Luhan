<?php
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
session_start();
if (returnUserLevel($conn) < 1) {
    header('Location:../newkanjis.php?error=permissiondenied');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 2</title>
    <style><?php include '../CSS/levels.css'; ?></style>
</head>

<body>
    
</body>
    <center>
        <img src="../Images/logo2.png" id="icon"> <br><br>

        <?php 
            if(isset($_SESSION["useruid"])) {
                echo "<li><a href='../homepage.php'>Homepage</a></li>";
                echo "<li><a href='../newkanjis.php'> New Kanjis</a></li>";
            }else {
                header("location: ../luhan/login.php");
            }
        ?>
        
        <div class="newkanjis">
            <div class="slideshow-container">
                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">一</p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">いち</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">ichi</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">one</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">二 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">に</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">ni</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">two</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">三 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">さん</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">san</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">three</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">四 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">し/よん</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">shi, yon</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">four</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">五 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">ご</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">go</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">five</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">六 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">ろく</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">roku</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">six</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">七 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">しち/ なな</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">shichi, nana</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">seven</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">八 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">はち</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">hachi</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">eight</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">九 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">きゅう</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">kyuu</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">nine</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">十 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">じゅう</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">jyuu</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">ten </p>
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
            if (returnUserLevel($conn) < 2) {
        
            ?><form action="../includes/levels.inc.php" method="post">
                <button type="submit" name="submit">Complete level</button>
            </form>
        <?php
            }
        ?>

        <script src="../JavaScript/slides-new-kanjis.js"></script>
    </center>
</html>