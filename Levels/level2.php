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
                    <p class="kata">Hirigana</p>
                    <p class="katakana">こんにちわ</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">kon’nichiwa</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Hello</p>
                </div>

                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">さようなら</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">sayounara</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Bye</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">お願いします </p>
                    <p class="kata">Hirigana</p>
                    <p class="katakana">おねがいします</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">onegaishimasu</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Please</p>
                </div>
                
                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">ありがとうございます。</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">arigatougozaimasu</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Thank you</p>
                </div>

                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">はい</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">hai</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Yes</p>
                </div>

                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">いいえ</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">iie</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">No</p>
                </div>

                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">オーケー</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">ok</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Ok</p>
                </div>

                <div class="mySlides">
                    <p class="kan">Kanji</p>
                    <p class="kanji">助けて</p>
                    <p class="kata">Hirigana</p>
                    <p class="katakana">たすけて</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">tasukete</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Help</p>
                </div>

                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">ごめんなさい</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">gomennasai</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Sorry</p>
                </div>

                <div class="mySlides">
                    <p class="kata">Hirigana</p>
                    <p class="katakana">すみません</p>
                    <p class="roman">Romanji</p>
                    <p class="romanji">sumimasen</p>
                    <p class="mean">Meaning</p>
                    <p class="meaning">Excuse me</p>
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