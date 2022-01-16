<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();

if(!isset($_SESSION['id'])) {
  $_SESSION['id'] = 1;
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
            $meaningInput = $_POST['meaningInput'];
            if ($meaningInput == $meaning) {
                $_SESSION['id'] += 1;
            }
            if ($meaningInput != $meaning) {
                echo $meaning;
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
            <p><?php echo $kanji; ?></p>
        </div>

        <form name="exam" method="post" action="review.php">
            <input type=text name="meaningInput"> <br> <br>

            <input type="submit" name="next" value="Next">
        </form>
        
    </center>
</html>