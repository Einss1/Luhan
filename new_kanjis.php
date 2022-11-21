<?php
//Import database connection and functions.
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

//Initialize session.
session_start();

//If empty GET from url, redirect.
if (empty($_GET)) {
    header('Location:new_words_menu.php');
}

//If GET is higher than user's level, redirect.
if ($_GET['level'] > returnUserLevel($conn)) {
    header('Location:new_words_menu.php');
}


else {
    $level = $_GET['level'];
    $sql="SELECT * FROM words WHERE level = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $level);
    $stmt->execute();
    $results = $stmt->get_result();
    
    $word = array();
    $significado = array();

    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $word[] = $row['word'];
            $significado[] = $row['significado'];
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
    <title>Nível <?php echo $level?></title>
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
                echo '<li class="nav-item"><a class="nav-link" href="homepage.php">Página inicial</a></li>';
                echo '<li class="nav-item"><a class="nav-link" href="new_kanjis.php"> Novas palavras</a></li>';
                echo '<li class="nav-item"><a class="nav-link"href="includes/logout.inc.php"> Sair</a></li>';
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
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[0]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[0])?></p>
                    <?php
                        $file = "audio/" . $word[0] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[0].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[1]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[1])?></p>
                    <?php
                        $file = "audio/" . $word[1] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[1].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[2]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[2])?></p>
                    <?php
                        $file = "audio/" . $word[2] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[2].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[3]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[3])?></p>
                    <?php
                        $file = "audio/" . $word[3] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[3].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[4]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[4])?></p>
                    <?php
                        $file = "audio/" . $word[4] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[4].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[5]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[5])?></p>
                    <?php
                        $file = "audio/" . $word[5] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[5].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[6]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[6])?></p>
                    <?php
                        $file = "audio/" . $word[6] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[6].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[7]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[7])?></p>
                    <?php
                        $file = "audio/" . $word[7] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[7].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[8]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[8])?></p>
                    <?php
                        $file = "audio/" . $word[8] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[8].'&tl=en-us');
                            file_put_contents($file, $mp3);
                        }
                    ?>
                    <br>
                    <audio controls>
                        <source src="<?php echo $file ?>" type="audio/mpeg" />
                    </audio>
                </div>

                <div class="mySlides">
                    <p class="word">Palavra</p>
                    <p class="word"><?php print_r($word[9]);?><p>
                    <p class="mean">Significado</p>
                    <p class="meaning"><?php print_r($significado[9])?></p>
                    <?php
                        $file = "audio/" . $word[9] . ".mp3";

                        if (!file_exists($file)) {
                            $mp3 = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-&&client=gtx&q='.$word[9].'&tl=en-us');
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
            if (returnUserLevel($conn) <= $level) {
            ?><form action="includes/levels.inc.php" method="post">
                <button type="submit" name="submit">Complete level</button>
            </form>
        <?php
            }
        ?>
        <script src="JavaScript/slides-new-kanjis.js"></script>
    </center>
</html>