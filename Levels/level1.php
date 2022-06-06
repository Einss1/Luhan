<?php
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <style><?php include '../CSS/levels.css'; ?></style>
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
                echo '<li class="nav-item"><a class="nav-link" href="../homepage.php">Homepage</a></li>';
                echo '<li class="nav-item"><a class="nav-link" href="../newkanjis.php"> New Kanjis</a></li>';
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
                    <p class="kanji1">一</p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">いち</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">ichi</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">one</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji2">二</p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">に</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">ni</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">two</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji3">三 </p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">さん</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">san</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">three</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji4">四 </p>
                    <p class="kata">Katakana</p>
                    <p class="katakana">し/よん</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">shi, yon</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">four</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji5">五 </p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">ご</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">go</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">five</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji6">六 </p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">ろく</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">roku</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">six</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji7">七 </p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">しち/ なな</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">shichi, nana</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">seven</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji8">八 </p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">はち</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">hachi</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">eight</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji9">九 </p> 
                    <p class="kata">Katakana</p>
                    <p class="katakana">きゅう</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">kyuu</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">nine</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji10">十 </p>
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
            if (returnUserLevel($conn) < 1) {
            ?><form action="../includes/levels.inc.php" method="post">
                <button type="submit" name="submit">Complete level</button>
            </form>
        <?php
            }
        ?>
        <script src="../JavaScript/slides-new-kanjis.js"></script>
    </center>
</html>