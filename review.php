<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();

if (empty($_GET)) {
    header('Location:review_menu.php');
}

if ($_GET['level'] > returnUserLevel($conn)) {
    header('Location:review_menu.php');
}

if(!isset($_SESSION['id'])) {
    $x = $_GET['level'];
    $sql="SELECT * FROM kanjis WHERE level = '$x' ORDER BY rand()";
    $results = mysqli_query($conn,$sql);
    
    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $id = $row['id'];
        }
    }    

  $_SESSION['level'] = $x;
  $_SESSION['id'] = $id;
  $_SESSION['seenRight'] = array();
  $_SESSION['seenWrong'] = array();
  $_SESSION['progress'] = 0;
}

else{
    if(isset($_POST['next'])){
        $userLevel = returnUserLevel($conn);
        $sql="SELECT * FROM kanjis WHERE level = '".$_SESSION['level']."' and id = '".$_SESSION['id']."'";
        $results = mysqli_query($conn,$sql);
    
        if ($results) {
            while ($row=mysqli_fetch_array($results)) {
                $id = $row['id'];
                $kanji = $row['kanji'];
                $meaning = $row['meaning'];
                $romanji = $row['romanji'];
                $hiragana = $row['hiragana'];
            }
            if(isset($meaning)){
                $meaningInp = $_POST['meaningInput'];
                $meaningInpu = trim($meaningInp);
                $meaningInput = strtolower($meaningInpu);

                if ($meaningInput == $meaning) {
                    if (!in_array($id, $_SESSION['seenRight'])) {
                        array_push($_SESSION['seenRight'],$id);
                        if (count($_SESSION['seenRight']) == 10) {
                            ?> <script> 
                                if (typeof(Storage) !== "undefined") {
                                    if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") !== null) {
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 100) {
                                            location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 90) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 80) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 70) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 60) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "60"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 50) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "100"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "60"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 40) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "90"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "60"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "40"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 30) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "80"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "60"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "40"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "30"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 20) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "70"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "60"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "40"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "30"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "20"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 10) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "60"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "40"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "30"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "20"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "10"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                        if(localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") == 0) {
                                            <?php
                                                if(count($_SESSION['seenWrong']) == 0) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "40"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "30"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "20"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "10"); <?php
                                                }
                                                if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                    ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "0"); <?php
                                                }
                                            ?> location.replace("review_menu.php");
                                        }
                                    }
                                    if (localStorage.getItem("progressLevel" + "<?php echo $_SESSION['level'] ?>") === null) {
                                        <?php
                                            if(count($_SESSION['seenWrong']) == 0) {
                                                ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "50");<?php
                                            }
                                            if(count($_SESSION['seenWrong']) > 0 && count($_SESSION['seenWrong']) <= 2) {
                                                ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "40");<?php

                                            }
                                            if(count($_SESSION['seenWrong']) > 2 && count($_SESSION['seenWrong']) <= 4) {
                                                ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "30");<?php

                                            }
                                            if(count($_SESSION['seenWrong']) > 4 && count($_SESSION['seenWrong']) <= 6) {
                                                ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "20");<?php

                                            }
                                            if(count($_SESSION['seenWrong']) > 6 && count($_SESSION['seenWrong']) <= 8) {
                                                ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "10");<?php

                                            }
                                            if(count($_SESSION['seenWrong']) > 8 && count($_SESSION['seenWrong']) <= 10) {
                                                ?> localStorage.setItem("progressLevel" + "<?php echo $_SESSION['level'] ?>", "0");<?php
                                            }
                                            ?> location.replace("review_menu.php"); <?php
                                        ?>
                                    }
                                } else {
                                    location.replace("review_menu.php");
                                }
                            </script> <?php
                        }
                    }

                    if (in_array($id, $_SESSION['seenRight'])) {
                        $_SESSION['progress'] =  $_SESSION['progress'] + 10;
                        $sql="SELECT * FROM kanjis WHERE level = '".$_SESSION['level']."' ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);
                        
                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                        
                        while (in_array($id, $_SESSION['seenRight']) && (count($_SESSION['seenRight']) != 10)) {
                            $results2 = mysqli_query($conn,$sql);
                        
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }
                            }
                        } $_SESSION['id'] = $id;
                    }
                }

                if ($meaningInput != $meaning) {
                    echo '<div class="meaning">'."The correct answer was: ".$meaning.'</div>';
                    if (!in_array($id, $_SESSION['seenWrong']) ) {
                        array_push($_SESSION['seenWrong'],$id);
                    }

                    if (in_array($id, $_SESSION['seenWrong'])) {
                        $sql="SELECT * FROM kanjis WHERE level = '".$_SESSION['level']."' ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);

                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                       while (in_array($id, $_SESSION['seenRight']) && (count($_SESSION['seenRight']) != 10)) {
                            $results2 = mysqli_query($conn,$sql);
                        
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }
                            }
                        } $_SESSION['id'] = $id;
                    }
                    }
                }
            }
        }
    }

$userLevel = returnUserLevel($conn);
$sql="SELECT * FROM kanjis WHERE level <= '$userLevel' and id = '".$_SESSION['id']."'";
$results = mysqli_query($conn,$sql);

if ($results) {
    while ($row=mysqli_fetch_array($results)) {
        $id = $row['id'];
        $kanji = $row['kanji'];
        $meaning = $row['meaning'];
        $romanji = $row['romanji'];
        $hiragana = $row['hiragana'];
    }

    $file = "audio/" . $romanji . ".mp3";


}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Review</title>
        <link rel="icon" type="image/x-icon" href="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <style><?php include 'CSS/newkanjis.css'?></style>
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
                    echo '<li class="nav-item"><a class="nav-link"href="homepage.php">Homepage </a></li>';
                    echo '<li class="nav-item"><a class="nav-link"href="profile.php">Profile </a></li>';
                    echo '<li class="nav-item"><a class="nav-link"href="includes/logout.inc.php"> Log out </a></li>';
                }
                else {
                    header("location: ../luhan/login/index.php");
                }
            ?>
                        </ul>
                    </div>
                </div>
            </nav>
    
</body>
    <center>
        <img src="https://dummyimage.com/600x300/343a40/6c757d" id="icon"> <br><br>
        
        <br><br><br><br>
        <div class="progress-bar-box">
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $_SESSION['progress'] ?>%"></div>
            </div>
        </div>
        <br><br>
                
        <div>
            <p><?php 
                    if(isset($kanji) && ($kanji!==null)) {
                        echo $kanji;
                        ?><br><br>

                        <audio controls>
                            <source src="<?php echo $file ?>" type="audio/mpeg" />
                        </audio><br>
                        <form name="exam" method="post" action="review.php?level=" autocomplete="off">
                            <input type=text name="meaningInput" required> <br> <br>

                            <input type="submit" name="next" value="Next">
                        </form> <?php
                    } 
                    if(isset($hiragana) && ($hiragana!==null) && ($kanji==null)){
                        echo $hiragana;
                        ?><br><br>
                        <audio controls>
                            <source src="<?php echo $file ?>" type="audio/mpeg" />
                        </audio><br>
                        <form name="exam" method="post" action="review.php?level=" autocomplete="off">
                            <input type=text name="meaningInput" required> <br> <br>

                            <input type="submit" name="next" value="Next">
                        </form> <?php
                    } 
                    if($kanji==null && $hiragana==null) {
                        echo "No more kanjis for now!";
                    }   
                ?></p>
        </div>
    </center>
</html>