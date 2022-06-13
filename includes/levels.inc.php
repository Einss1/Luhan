<?php
session_start();

if (isset($_POST["submit"])) {
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $currentUser = $_SESSION['useruid'];
    $currentDate = date("Y-m-d h:i:sa");

    $sql = "UPDATE users SET timeLastLevel = '$currentDate' WHERE usersUid = '$currentUser'";
    $result = mysqli_query($conn,$sql);

    $sql = "SELECT usersLevel FROM users WHERE usersUid = '$currentUser'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $usersLevel = $row["usersLevel"];
        
        if($usersLevel == 0) {
            $sql = "UPDATE users SET usersLevel = '1' WHERE usersUid = '$currentUser'";
            $results = mysqli_query($conn,$sql);
            $intUsersLevel = (int)$usersLevel;
            $newLevel = $intUsersLevel + 1;
            $sql = "UPDATE users SET usersLevel = '$newLevel' WHERE usersUid = '$currentUser'";
            $results = mysqli_query($conn,$sql);
            header('Location:../new_kanjis.php');
        }
        if ($usersLevel !=0){
            $intUsersLevel = (int)$usersLevel;
            $newLevel = $intUsersLevel + 1;
            $sql = "UPDATE users SET usersLevel = '$newLevel' WHERE usersUid = '$currentUser'";
            $results = mysqli_query($conn,$sql);
            header('Location:../new_kanjis.php');
        } 
    } else {
        header('Location:../new_kanjis.php?error=somethingwentwrong');
    }

} else{
    header("location: ../login/index.php");
    exit();
}

?>