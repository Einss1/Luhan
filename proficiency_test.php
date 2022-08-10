<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();
$currentUser = $_SESSION['useruid'];
$currentUserLevel = returnUserLevel($conn);
$userNewLevel = 0;

if(!isset($_SESSION['id'])) {
    $sql="SELECT * FROM kanjis ORDER BY rand()";
    $results = mysqli_query($conn,$sql);
    
    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $id = $row['id'];
        }
    }    

  $_SESSION['id'] = $id;
  $_SESSION['seenRight'] = array();
  $_SESSION['seenWrong'] = array();
  $_SESSION['progress_proficiency'] = 0;
}

else{
    if(isset($_POST['next'])){
        $sql="SELECT * FROM kanjis WHERE id = '".$_SESSION['id']."'";
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
                similar_text($meaningInput, $meaning, $percent);


                $right = count($_SESSION['seenRight']);
                $wrong = 50 - $right;

                if ($wrong <= 5) {
                    $userNewLevel = 450;
                }
                if ($wrong <= 10 && $wrong >= 5) {
                    $userNewLevel = 400;
                }
                if ($wrong <= 15 && $wrong >= 10) {
                    $userNewLevel = 350;
                }
                if ($wrong <= 20 && $wrong >= 15) {
                    $userNewLevel = 300;
                }
                if ($wrong <= 25 && $wrong >= 20) {
                    $userNewLevel = 250;
                }
                if ($wrong <= 30 && $wrong >= 25) {
                    $userNewLevel = 200;
                }
                if ($wrong <= 35 && $wrong >= 30) {
                    $userNewLevel = 150;
                }
                if ($wrong <= 40 && $wrong >= 35) {
                    $userNewLevel = 100;
                }
                if ($wrong <= 45 && $wrong >= 40) {
                    $userNewLevel = 50;
                }
                if ($wrong <= 50 && $wrong >= 45) {
                    $userNewLevel = 1;
                }

                if ($meaningInput == $meaning) {
                    if (!in_array($id, $_SESSION['seenRight'])) {
                        array_push($_SESSION['seenRight'],$id);
                        $_SESSION['progress_proficiency'] =  $_SESSION['progress_proficiency'] + 2;
                        if ($_SESSION['progress_proficiency'] >= 100) {
                            if($currentUserLevel >= $userNewLevel) {
                                header('Location:homepage.php?success=');
                                exit;
                            }
                            else {
                                $sql = "UPDATE users SET usersLevel = '$userNewLevel' WHERE usersUid = '$currentUser'";
                                $results = mysqli_query($conn,$sql);
                                header('Location:homepage.php?success=accountLevelUpdated');
                                exit;
                            }
                        }
                    }

                    if (in_array($id, $_SESSION['seenRight'])) {
                        if ($_SESSION['progress_proficiency'] >= 100) {
                            if($currentUserLevel >= $userNewLevel) {
                                header('Location:homepage.php?success=');
                                exit;
                            }
                            else {
                                $sql = "UPDATE users SET usersLevel = '$userNewLevel' WHERE usersUid = '$currentUser'";
                                $results = mysqli_query($conn,$sql);
                                header('Location:homepage.php?success=accountLevelUpdated');
                                exit;
                            }
                        }
                        $sql="SELECT * FROM kanjis ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);
                        
                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                        
                        while (in_array($id, $_SESSION['seenRight']) && ($_SESSION['progress_proficiency'] < 100)) {
                            $results2 = mysqli_query($conn,$sql);
                        
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }
                            }
                        } $_SESSION['id'] = $id;
                    }
                }

                if ($meaningInput != $meaning && $percent > 50) {
                    echo '<div class="meaning">'."Oops! A misspell error! Your answer was $meaningInput and the correct answer was: ".$meaning.'</div>';

                    if (!in_array($id, $_SESSION['seenRight'])) {
                        array_push($_SESSION['seenRight'],$id);
                        $_SESSION['progress_proficiency'] =  $_SESSION['progress_proficiency'] + 2;
                        if ($_SESSION['progress_proficiency'] >= 100) {
                            if($currentUserLevel >= $userNewLevel) {
                                header('Location:homepage.php?success=');
                                exit;
                            }
                            else {
                                $sql = "UPDATE users SET usersLevel = '$userNewLevel' WHERE usersUid = '$currentUser'";
                                $results = mysqli_query($conn,$sql);
                                header('Location:homepage.php?success=accountLevelUpdated');
                                exit;
                            }
                        }
                    }

                    if (in_array($id, $_SESSION['seenRight'])) {
                        if ($_SESSION['progress_proficiency'] >= 100) {
                            if($currentUserLevel >= $userNewLevel) {
                                header('Location:homepage.php?success=');
                                exit;
                            }
                            else {
                                $sql = "UPDATE users SET usersLevel = '$userNewLevel' WHERE usersUid = '$currentUser'";
                                $results = mysqli_query($conn,$sql);
                                header('Location:homepage.php?success=accountLevelUpdated');
                                exit;
                            }
                        }
                        $sql="SELECT * FROM kanjis ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);
                        
                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                        
                        while (in_array($id, $_SESSION['seenRight']) && ($_SESSION['progress_proficiency'] < 100)) {
                            $results2 = mysqli_query($conn,$sql);
                        
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }
                            }
                        } $_SESSION['id'] = $id;
                    }
                }

                if ($meaningInput != $meaning && $percent < 50) {
                    echo '<div class="meaning">'."The correct answer was: ".$meaning.'</div>';
                    if (!in_array($id, $_SESSION['seenWrong']) ) {
                        array_push($_SESSION['seenWrong'],$id);
                        $_SESSION['progress_proficiency'] =  $_SESSION['progress_proficiency'] + 2;
                        if ($_SESSION['progress_proficiency'] >= 100) {
                            if($currentUserLevel >= $userNewLevel) {
                                header('Location:homepage.php?success=');
                                exit;
                            }
                            else {
                                $sql = "UPDATE users SET usersLevel = '$userNewLevel' WHERE usersUid = '$currentUser'";
                                $results = mysqli_query($conn,$sql);
                                header('Location:homepage.php?success=accountLevelUpdated');
                                exit;
                            }
                        }
                    }

                    if (in_array($id, $_SESSION['seenWrong'])) {
                        if ($_SESSION['progress_proficiency'] >= 100) {
                            if($currentUserLevel >= $userNewLevel) {
                                header('Location:homepage.php?success=');
                                exit;
                            }
                            else {
                                $sql = "UPDATE users SET usersLevel = '$userNewLevel' WHERE usersUid = '$currentUser'";
                                $results = mysqli_query($conn,$sql);
                                header('Location:homepage.php?success=accountLevelUpdated');
                                exit;
                            }
                        }
                        $_SESSION['progress_proficiency'] =  $_SESSION['progress_proficiency'] + 2;
                        $sql="SELECT * FROM kanjis ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);

                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                       while (in_array($id, $_SESSION['seenRight']) && ($_SESSION['progress_proficiency'] < 100)) {
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
$sql="SELECT * FROM kanjis WHERE id = '".$_SESSION['id']."'";
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
        <title>Proficiency Test</title>
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
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $_SESSION['progress_proficiency'] ?>%"></div>
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
                        <form name="exam" method="post" action="proficiency_test.php" autocomplete="off">
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
                        <form name="exam" method="post" action="proficiency_test.php" autocomplete="off">
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