<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();

if(!isset($_SESSION['id'])) {
    $userLevel = returnUserLevel($conn);
    $sql="SELECT * FROM kanjis WHERE level <= '$userLevel' ORDER BY rand() LIMIT 1";
    $results = mysqli_query($conn,$sql);
    
    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $id = $row['id'];
        }
    }    
  $_SESSION['id'] = $id;
}

else{
    if(isset($_POST['next'])){
        $userLevel = returnUserLevel($conn);
        $sql="SELECT * FROM kanjis WHERE level <= '$userLevel' and id = '".$_SESSION['id']."'";
        $results = mysqli_query($conn,$sql);
    
        if ($results) {
            while ($row=mysqli_fetch_array($results)) {
                $id = $row['id'];
                $kanji = $row['kanji'];
                $meaning = $row['meaning'];
            }
            if(isset($meaning) && ($meaning!==null)){
                $meaningCaps = strtoupper($meaning);
                $meaningFirstLetterCaps =  ucfirst($meaning);
                $meaningInput = $_POST['meaningInput'];
                if ($meaningInput == $meaning || $meaningInput == $meaningCaps || $meaningInput == $meaningFirstLetterCaps) {
                    $seenRight = array();
                    array_push($seenRight, $_SESSION['id']);
                    print_r($seenRight);
                    $sql="SELECT * FROM kanjis WHERE level <= '$userLevel' ORDER BY rand() LIMIT 1";
                    $results2 = mysqli_query($conn,$sql);
                    if ($results2) {
                        while ($row=mysqli_fetch_array($results2)) {
                            $id = $row['id'];
                            echo $id;
                            $alreadySeen= in_array($id, $seenRight);
                            if ($id == $_SESSION['id'] || $alreadySeen == true) {
                                echo "NEED TO RANDOMIZE"; 
                                /* find a way to randomize again and then change $_SESSION['id'] to the unseen/ missed kanji */
                            }
                            if ($id != $_SESSION['id'] && $alreadySeen == false){
                                echo "NO NEED TO RANDOMIZE";
                            }
                        }
                    }  
                }
                if ($meaningInput != $meaning && $meaningCaps && $meaningFirstLetterCaps) {
                    echo '<div class="meaning">'."The correct answer was: ".$meaningFirstLetterCaps.'</div>';
                    $_SESSION['id'] += 1;
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
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <style><?php include 'CSS/review.css'; ?></style>
        
</head>

<body>
    
</body>
    <center>
        <img src="Images/logo2.png" id="icon"> <br><br>

        <?php 
            if(isset($_SESSION["useruid"])) {
                echo "<li><a href='homepage.php'>Homepage</a></li>";
            }else {
                header("location: login.php");
            }
        ?>
        
        <br><br><br><br>

        <div>
            <p><?php if(isset($kanji) && ($kanji!==null)) {
                    	echo $kanji;
                        ?><form name="exam" method="post" action="review.php" autocomplete="off">
                            <input type=text name="meaningInput" required> <br> <br>

                            <input type="submit" name="next" value="Next">
                        </form> <?php
                    } else {
                        echo "No more kanjis for now!";
                    }     ?></p>
        </div>
    </center>
</html>