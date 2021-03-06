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
    $hiragana = array();
    $romanji = array();

    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $kanji[] = $row['kanji'];
            $meaning[] = $row['meaning'];
            $hiragana[] = $row['hiragana'];
            $romanji[] = $row['romanji'];
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
    <title>Level</title>
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
                    <?php 
                        if (empty($kanji[0])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[0]);
                        }
                        if (empty($hiragana[0])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[0]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[0])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[0])?></p>
                    <?php
                        $file = "audio/" . $romanji[0] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[0].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[1])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[1]);
                        }
                        if (empty($hiragana[1])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[1]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[1])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[1])?></p>
                    <?php
                        $file = "audio/" . $romanji[1] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[1].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[2])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[2]);
                        }
                        if (empty($hiragana[2])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[2]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[2])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[2])?></p>
                    <?php
                        $file = "audio/" . $romanji[2] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[2].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[3])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[3]);
                        }
                        if (empty($hiragana[3])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[3]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[3])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[3])?></p>
                    <?php
                        $file = "audio/" . $romanji[3] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[3].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[4])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[4]);
                        }
                        if (empty($hiragana[4])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[4]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[4])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[4])?></p>
                    <?php
                        $file = "audio/" . $romanji[4] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[4].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[5])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[5]);
                        }
                        if (empty($hiragana[5])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[5]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[5])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[5])?></p>
                    <?php
                        $file = "audio/" . $romanji[5] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[5].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[6])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[6]);
                        }
                        if (empty($hiragana[6])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[6]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[6])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[6])?></p>
                    <?php
                        $file = "audio/" . $romanji[6] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[6].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[7])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[7]);
                        }
                        if (empty($hiragana[7])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[7]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[7])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[7])?></p>
                    <?php
                        $file = "audio/" . $romanji[7] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[7].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[8])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[8]);
                        }
                        if (empty($hiragana[8])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[8]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[8])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[8])?></p>
                    <?php
                        $file = "audio/" . $romanji[8] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[8].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <?php 
                        if (empty($kanji[9])) {
                            echo "";
                        } else {
                            ?><p class="kata">Kanji</p><?php
                            print_r($kanji[9]);
                        }
                        if (empty($hiragana[9])) {
                            echo "";
                        } else {
                            ?><p class="kata">Katakana</p><?php
                            print_r($hiragana[9]);
                        }
                    ?>
                    <p class="roman">Romanji</p>
                    <p class="romanji"><?php print_r($romanji[9])?></p>
                    <p class="mean">Meaning</p>
                    <p class="meaning"><?php print_r($meaning[9])?></p>
                    <?php
                        $file = "audio/" . $romanji[9] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$romanji[9].'&tl=ja');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
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